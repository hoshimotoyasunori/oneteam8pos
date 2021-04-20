@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<div class="container">
    <div class="col-md-12 p-0">
       <!--<canvas id="canvas" style="border:1px solid gray;">-->
        <img class="col" src="data:image/png;base64,{{ $post->image }}"/>
       <!--</canvas>-->
    </div>
    <div>
        <input type="button" id="undo" name="undo" value="undo">
        <input type="button" id="redo" name="redo" value="redo">
    </div>
</div>

@endsection