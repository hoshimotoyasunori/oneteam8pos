@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<!--<div class="container">-->
  <div class="row   pb-5">
      
      
  <!--  <div class="col-md-10 text-left">-->
       <!--/////キャプション/////-->
  <!--      <div class="row">-->
  <!--         <h4 class="col-md-10 m-0">{{ $post->caption }}</h4>-->
            <!--/////消去ボタン/////-->
  <!--          @if ($post->user->id == Auth::user()->id)-->
  <!--       　　<a clas=" ml-auto my-auto" rel="nofollow" href="/postsdelete/{{ $post->id }}">-->
  <!--            <div class="delete-post-icon col-md-1"></div>-->
  <!--          </a>-->
  <!--          @endif-->
  <!--      </div>-->
              
  <!--/////作成日時/////-->
  <!--      <string class="light-color post-time no-text-decoration " href="/posts/{{ $post->id }}">{{ $post->created_at }}</string>-->
  <!--      <br>-->
  <!--/////詳細/////-->
  <!--      <span><p>{{ $post->details }}</p></span>-->
  <!--/////ユーザーネーム/////-->
        <!--<p>{{ $post->user->name }}</p>-->
  <!--  </div>  -->
      
      
      <div  class="col-md-1 p-0"></div>
<!--/////画像データ/////-->
    <div class="col-md-8 text-left p-0">
        <img class="card-img-top embed-responsive-item object-fit: cover;  border border-dark rounded" src="data:image/png;base64,{{ $post->image }}"/>
      <!--</a>-->
    </div>
<!--/////コメントBOX/////-->
    <div class="col-md-2 border border-dark rounded ">
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
        <div class="overflow-auto" >
          <!--<span><strong>{{ $post->user->name }}</strong></span>-->
          <!--<span>{{ $post->caption }}</span>-->
          <div id="comment-post-{{ $post->id }}">
            @include('post.comment_list')
          </div>
        </div>  
    </div>
    <div  class="col-md-1 p-0"></div>
<!--</div>-->
@endsection