@extends('layouts.app')


@section('content')
<!--<img class="col-md-12 p-0" src="data:image/png;base64,{{ $post->image }}"/>-->
     
<!--<div>-->
<!--    <div class="col-md-12 p-0">-->
<!--       <canvas id="canvas" style="border:1px solid gray;">-->
<!--        <img class="col-md-12 p-0" src="data:image/png;base64,{{ $post->image }}"/>-->
<!--       </canvas>-->
<!--    </div>-->
<!--    <div>-->
<!--        <input type="button" id="undo" name="undo" value="undo">-->
<!--        <input type="button" id="redo" name="redo" value="redo">-->
<!--    </div>-->
<!--</div>-->
<body>
    <h1>Hello World!</h1>
  </body>
<a href="/posts/{{ $post->id }}">back</a>

@endsection