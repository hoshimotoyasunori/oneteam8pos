<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Auth;
use Validator;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //コンストラクタ （このクラスが呼ばれると最初にこの処理をする）
    public function __construct()
    {
        // ログインしていなかったらログインページに遷移する（この処理を消すとログインしなくてもページを表示する）
        $this->middleware('auth');
    }
    
//     public function index($post_id)
//   {
//       $comments = Comment::limit(20)
//           ->orderBy('created_at', 'desc')
//           ->get();
//       $post = Post::where('id', $post_id)
//             ->firstOrFail();   
//      return view('post/show', ['post' => $post]);
//   }
    public function store(Request $request)
    {
        // Commentモデル作成
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
// $post = Post::where('id', $post_id)
//             ->firstOrFail();   
        // 「/」 ルートにリダイレクト
        // return view('post/show', ['post' => $post]);
        $comments = Comment::limit(20)
           ->orderBy('created_at', 'desc')
           ->get();
        return redirect('/');
    }    
    
    public function destroy(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $comment->delete();
        // return view('post/show', ['post' => $post]);
        return redirect('/');
    }
    
}
