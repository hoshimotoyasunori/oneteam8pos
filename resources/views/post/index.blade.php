@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<div class="row">
  @foreach ($posts as $post) 
    <div class="col-md-3 p-0">
      <!--<div class="card-wrap">-->
        <div class="card">
          <!--<div class="card-header align-items-center d-flex">-->
            <strong>{{ $post->caption }}</strong>
    <!--/////作成時間/////-->
            <string class="light-color post-time no-text-decoration " href="/posts/{{ $post->id }}">{{ $post->created_at }}</string>
          <!--</div>-->
    <!--//////画像データ///////-->
          <a href="/posts/{{ $post->id }}">
            <img src="data:image/png;base64,{{ $post->image }}" class="card-img-top" />
          </a>
          <!--<div class="card-body">-->
          <!--  <div class="row parts">-->
    <!--/////いいねボタン/////-->
              <!--<div id="like-icon-post-{{ $post->id }}">-->
              <!--  @if ($post->likedBy(Auth::user())->count() > 0)-->
              <!--    <a class="loved hide-text" data-remote="true" rel="nofollow" data-method="DELETE" href="/likes/{{ $post->likedBy(Auth::user())->firstOrFail()->id }}">いいねを取り消す</a>-->
              <!--  @else-->
              <!--    <a class="love hide-text" data-remote="true" rel="nofollow" data-method="POST" href="/posts/{{ $post->id }}/likes">いいね</a>-->
              <!--  @endif-->
              <!--</div>-->
    <!--/////コメントボタン/////-->
              <!--<a class="comment" href="/posts/{{ $post->id }}"></a>-->
    <!--/////消去ボタン/////-->
            <!--  @if ($post->user->id == Auth::user()->id)-->
           　<!--　<a class="ml-auto mx-0 my-auto" rel="nofollow" href="/postsdelete/{{ $post->id }}">-->
            <!--    <div class="delete-post-icon"></div>-->
            <!--  </a>-->
            <!--  @endif-->
            <!--</div>-->
    <!--/////いいねした人リスト/////-->  
          <!--  <div id="like-text-post-{{ $post->id }}">-->
          <!--    @include('post.like_text')-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      <!--</div>-->
    </div>
  @endforeach
</div>
@endsection