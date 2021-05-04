@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<!--<div class="container">-->
    <div class="row">
        <div class="col-md-10 p-0">
            <h4>{{ $post->caption }}</h4>
            <string class="light-color post-time no-text-decoration " href="/posts/{{ $post->id }}">{{ $post->created_at }}</string>
            <span><p class="m-0">{{ $post->details }}</p></span>
        </div>
    </div>
    <div class="row   pb-5">
<!--/////画像データ/////-->
        <div class="col-md-8 text-left p-0">
            <img class="card-img-top embed-responsive-item object-fit: cover;  border border-dark rounded" src="data:image/png;base64,{{ $post->image }}"/>
        </div>
<!--/////コメントBOX/////-->
        <div class="col-md-4 border border-dark rounded px-3">
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
              <div id="comment-post-{{ $post->id }}">
                @include('post.comment_list')
              </div>
            </div>  
        </div>
    </div>    
</div>
    
  <!--<div class="row">-->
    <!--</div>-->
<!--</div>-->
@endsection