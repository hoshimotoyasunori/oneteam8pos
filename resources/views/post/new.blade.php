@extends('layouts.app')
@include('navbar')
@include('footer')
@section('content')
<div class="panel-body pt-5">
<!-- バリデーションエラーの場合に表示 --> 
@include('common.errors')

<div class="d-flex flex-column align-items-center ">
    <!--<div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">-->
        <div class="card">
            <div class="card-header">
                画像投稿
            </div>
            <div class="card-body">
                <form class="upload-images p-0 border-0" id="new_post" enctype="multipart/form-data" action="{{ url('posts')}}" accept-charset="UTF-8" method="POST">
                {{csrf_field()}} 
                    <div class="form-group row mt-2">
                        <div class="col-auto pr-0">
                            @if (Auth::user()->image)
                            <img class="post-profile-icon round-img" src="data:image/png;base64,{{ Auth::user()->image }}"/>
                            @endif
                        </div>
                        <div class="col pl-0">
                            <input class="form-control border-1" placeholder="タイトルを記入" type="text" name="caption" value="{{ old('list_name') }}"/>
                        </div>
                    </div>
                    <div class="col pl-0">
                        <textarea class="form-control border-1" placeholder="詳細を記入" type="text" name="details" value="{{ old('list_name') }}"></textarea>
                    </div>
                    <div class="my-3 ">
                        <input type="file" name="photo" accept="image/jpeg,image/gif,image/png" />
                    </div>
                    <input type="submit" name="commit" value="投稿する" class="btn btn-primary" data-disable-with="投稿する" />
                </form>      
            </div>
        </div>
    <!--</div>-->
</div>
<script type="text/javascript">
  $('#post_image').bind('change', function() {
    var size_in_megabytes = this.files[0].size/1024/1024;
    if (size_in_megabytes > 1) {
      alert('ファイルサイズの最大は1MBまでです。違う画像を選んでください。');
    }
  });
</script>
@endsection