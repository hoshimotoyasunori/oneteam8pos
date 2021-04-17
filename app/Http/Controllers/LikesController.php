<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Post;
use Auth;
use Validator;

class LikesController extends Controller
{
    //コンストラクタ （このクラスが呼ばれると最初にこの処理をする）
    public function __construct()
    {
        // ログインしていなかったらログインページに遷移する（この処理を消すとログインしなくてもページを表示する）
        $this->middleware('auth');
    }
    
    public function store(Request $request)
        {
            // Likeモデル作成
            $like = new Like;
            $like->post_id = $request->post_id;
            $like->user_id = Auth::user()->id;
            $like->save();
    
            // 「/」 ルートにリダイレクト
            return redirect('/');
        }
    public function destroy(Request $request)
    {
        $like = Like::find($request->like_id);
        $like->delete();
        return redirect('/');
    }
}
