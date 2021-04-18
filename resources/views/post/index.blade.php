@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<div class="row">
@foreach ($posts as $post) 
<!--<div class="row">-->
  <div class="col-md-4 mx-auto">
    <div class="card-wrap">
      <div class="card">
        <div class="card-header align-items-center d-flex">
<!--/////プロフィール写真/////-->
          <a class="no-text-decoration" href="/users/{{ $post->user->id }}">
            @if ($post->user->image)
                <img class="post-profile-icon round-img" src="data:image/png;base64,{{ $post->user->image }}"/>
            @else
                <img class="post-profile-icon round-img" src="{{ asset('/images/blank_profile.png') }}"/>
            @endif
          </a>
          <a class="black-color no-text-decoration" title="{{ $post->user->name }}" href="/users/{{ $post->user->id }}">
            <!--<strong>{{ $post->user->name }}</strong>-->
            <strong>{{ $post->caption }}</strong>
          </a>
          
<!--/////ユーザーネーム/////-->
          @if ($post->user->id == Auth::user()->id)
          	<a class="ml-auto mx-0 my-auto" rel="nofollow" href="/postsdelete/{{ $post->id }}">
              <div class="delete-post-icon"></div>
          	</a>
          @endif
        </div>
<!--//////画像データ///////-->
        <a href="/users/{{ $post->user->id }}">
          <img src="data:image/png;base64,{{ $post->image }}" class="card-img-top" />
        </a>
      
        <div class="card-body">
          <div class="row parts">
<!--/////いいねボタン/////-->
            <div id="like-icon-post-{{ $post->id }}">
              @if ($post->likedBy(Auth::user())->count() > 0)
                <a class="loved hide-text" data-remote="true" rel="nofollow" data-method="DELETE" href="/likes/{{ $post->likedBy(Auth::user())->firstOrFail()->id }}">いいねを取り消す</a>
              @else
                <a class="love hide-text" data-remote="true" rel="nofollow" data-method="POST" href="/posts/{{ $post->id }}/likes">いいね</a>
              @endif
            </div>
<!--/////コメントボタン/////-->
            <a class="comment" href="#"></a>
          </div>
              
          <div id="like-text-post-{{ $post->id }}">
            @include('post.like_text')
          </div>
<!--/////コメント履歴/////-->
          <div>
            <span>
              <!--<strong>{{ $post->user->name }}</strong>-->
            </span>
            <!--<span>{{ $post->caption }}</span>-->
            <div id="comment-post-{{ $post->id }}">
              @include('post.comment_list')
            </div>
  <!--/////投稿日時/////-->
            <a class="light-color post-time no-text-decoration" href="/posts/{{ $post->id }}">{{ $post->created_at }}</a>
            <hr>
  <!--/////投稿エリア/////-->
            <div class="row actions" id="comment-form-post-{{ $post->id }}">
           	  <form class="w-100" id="new_comment" action="/posts/{{ $post->id }}/comments" accept-charset="UTF-8" data-remote="true" method="post">
           	    <input name="utf8" type="hidden" value="&#x2713;" />
             	  {{csrf_field()}} 
                <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" />
                <input value="{{ $post->id }}" type="hidden" name="post_id" />
                <input class="form-control comment-input border-0" placeholder="コメント ..." autocomplete="off" type="text" name="comment" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--</div>-->
@endforeach
</div>
@endsection