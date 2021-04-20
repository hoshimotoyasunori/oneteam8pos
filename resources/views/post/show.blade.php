@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<div class="container">
  <div class="row">
<!--/////画像データ/////-->
    <div class="col-md-10 text-left p-0">
      <a href="/posts/{{ $post->id }}/drow">
        <img class="col" src="data:image/png;base64,{{ $post->image }}"/>
      </a>
      <div >
  <!--/////キャプション/////-->
        <span><h4>{{ $post->caption }}</h4></span>
  <!--/////作成日時/////-->
        <string class="light-color post-time no-text-decoration " href="/posts/{{ $post->id }}">{{ $post->created_at }}</string>
        <br>
  <!--/////詳細/////-->
        <span><p>{{ $post->details }}</p></span>
  <!--/////ユーザーネーム/////-->
        <!--<p>{{ $post->user->name }}</p>-->
  <!--/////消去ボタン/////-->
        @if ($post->user->id == Auth::user()->id)
     　　<a class="m-0" rel="nofollow" href="/postsdelete/{{ $post->id }}">
          <div class="delete-post-icon "></div>
        </a>
        @endif
      </div>
    </div>
<!--/////コメントBOX/////-->
    <div class="col-md-2 border border-dark rounded">
    <!--/////コメント送信欄/////-->
        <div class="row actions border-bottom border-dark" id="comment-form-post-{{ $post->id }}">
       	  <form class="w-100" id="new_comment" action="/posts/{{ $post->id }}/comments" accept-charset="UTF-8" data-remote="true" method="post">
       	    <input name="utf8" type="hidden" value="&#x2713;" />
         	  {{csrf_field()}} 
            <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" />
            <input value="{{ $post->id }}" type="hidden" name="post_id" />
            <input class="form-control comment-input border-0" placeholder="コメント ..." autocomplete="off" type="text" name="comment" />
          </form>
        </div>
    <!--/////コメント一覧/////-->
        <div>
          <!--<span><strong>{{ $post->user->name }}</strong></span>-->
          <!--<span>{{ $post->caption }}</span>-->
          <div id="comment-post-{{ $post->id }}">
            @include('post.comment_list')
          </div>
        </div>  
         
          <!--<a class="btn btn-outline-dark common-btn edit-profile-btn" href="/users/edit">プロフィールを編集</a>-->
          <!--<a class="btn btn-outline-dark common-btn edit-profile-btn" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>-->
          <!--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>-->
    </div>
  </div>
</div>
@endsection