<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Validator;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  //コンストラクタ （このクラスが呼ばれると最初にこの処理をする）
  public function __construct()
  {
      // ログインしていなかったらログインページに遷移する（この処理を消すとログインしなくてもページを表示する）
      $this->middleware('auth');
  }
  
  public function index()
  {
      $posts = Post::limit(20)
          ->orderBy('created_at', 'desc')
          ->get();
          
       // テンプレート「post/index.blade.php」を表示します。
      return view('post/index', ['posts' => $posts]);
  }
  
  public function new()
  {
       // テンプレート「post/new.blade.php」を表示します。
      return view('post/new');
  }
  
  public function store(Request $request)
  {
      //バリデーション（入力値チェック）
      $validator = Validator::make($request->all() , ['caption' => 'required|max:255','details' => 'required|max:255', 'photo' => 'required']);

        //バリデーションの結果がエラーの場合
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // Postモデル作成
        $post = new Post;
        $post->caption = $request->caption;
        $post->details = $request->details;
        $post->user_id = Auth::user()->id;
        $post->image = base64_encode(file_get_contents($request->photo));
        $post->save();
        
        
        // $request->photo->storeAs('public/post_images', $post->id . '.jpg');
        
        // 「/」 ルートにリダイレクト
        return redirect('/');
  }
  
  public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('/');
    }
    
    
    
    
public function show($post_id)
    {
        $post = Post::where('id', $post_id)
            ->firstOrFail();
            
         // テンプレート「post/show.blade.php」を表示します。
        return view('post/show', ['post' => $post]);
    }
    
public function drow($post_id)
    {
        $post = Post::where('id', $post_id)
            ->firstOrFail();
            
         // テンプレート「post/show.blade.php」を表示します。
        return view('post/drow', ['post' => $post]);
    }
    
}
