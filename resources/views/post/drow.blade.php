@extends('layouts.app')


@section('content')
<!--<img class="col-md-12 p-0" src="data:image/png;base64,{{ $post->image }}"/>-->
     
<div>
    <div class="col-md-12 p-0">
       <canvas id="canvas" style="border:1px solid gray; ">
        <img class="col-md-12 p-0" src="data:image/png;base64,{{ $post->image }}"/>
       </canvas>
    </div>
    <div>
        <input type="button" id="undo" name="undo" value="undo">
        <input type="button" id="redo" name="redo" value="redo">
    </div>
</div>




<!--<body onload="loadImage('canvas');">-->
<!--<p><canvas id="canvas"></canvas></p>-->
<!--<p>-->
<!--<input type="text" id="canvas_text" value="我輩は犬である">-->
<!--<button onclick="drawText('canvas', 'canvas_text');">文字を描く</button>-->
<!--</p>-->

<!--<script>-->
<!--//キャンバスに画像を描画する-->
<!--function loadImage(id)-->
<!--{-->
<!--	//画像を読み込んでImageオブジェクトを作成する-->
<!--	var image = new Image();-->
<!--	image.src = 'data:image/png;base64,{{ $post->image }}';-->
<!--	image.onload = (function () {-->
<!--		//画像ロードが完了してからキャンバスの準備をする-->
<!--		var canvas = document.getElementById(id);-->
<!--		var ctx = canvas.getContext('2d');-->
<!--		//キャンバスのサイズを画像サイズに合わせる-->
<!--		canvas.width = image.width;-->
<!--		canvas.height = image.height;-->
<!--		//キャンバスに画像を描画（開始位置0,0）-->
<!--		ctx.drawImage(image, 0, 0);-->
<!--	});-->
<!--}-->
<!--//キャンバスに文字を描く-->
<!--function drawText(canvas_id, text_id)-->
<!--{-->
<!--	var canvas = document.getElementById(canvas_id);-->
<!--	var ctx = canvas.getContext('2d');-->
<!--	var text = document.getElementById(text_id);-->
<!--	//文字のスタイルを指定-->
<!--	ctx.font = '32px serif';-->
<!--	ctx.fillStyle = '#404040';-->
<!--	//文字の配置を指定（左上基準にしたければtop/leftだが、文字の中心座標を指定するのでcenter-->
<!--	ctx.textBaseline = 'center';-->
<!--	ctx.textAlign = 'center';-->
<!--	//座標を指定して文字を描く（座標は画像の中心に）-->
<!--	var x = (canvas.width / 2);-->
<!--	var y = (canvas.height / 2);-->
<!--	ctx.fillText(text.value, x, y);-->
<!--}-->
<!--</script>-->
<!--</body>-->





<a href="/posts/{{ $post->id }}">back</a>
<script src="{{ asset('/js/drow.js') }}"></script>
@endsection