@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<div class="row  pb-5">
  @foreach ($posts as $post) 
    <div class="col-md-3 p-0">
        <div class="card">
          <div class="row">
            <div class="col-md-10 pl-3">
                <strong>{{ $post->caption }}</strong>
                 <!--/////作成時間/////-->
                <string class="light-color post-time no-text-decoration " href="/posts/{{ $post->id }}">{{ $post->created_at }}</string>
            </div>
                <!--/////消去ボタン/////-->
                @if ($post->user->id == Auth::user()->id)
             　　<a clas=col-md-2 pr-5" ml-auto my-auto" rel="nofollow" href="/postsdelete/{{ $post->id }}">
                  <div class="delete-post-icon "></div>
                </a>
              @endif
          </div>
            <!--//////画像データ///////-->
          <a href="/posts/{{ $post->id }}" class="embed-responsive embed-responsive-16by9">
            <img src="data:image/png;base64,{{ $post->image }}" class="card-img-top embed-responsive-item object-fit: cover;" />
          </a>
        </div>
    </div>
  @endforeach
</div>
@endsection