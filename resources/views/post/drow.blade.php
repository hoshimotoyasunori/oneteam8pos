@extends('layouts.app')
@include('navbar')
@include('footer')
@section('content')
<!--<img class="col-md-12 p-0" src="data:image/png;base64,{{ $post->image }}"/>-->
     
<!--<div>-->
<!--    <div class="col-md-12 p-0">-->
<!--       <canvas id="canvas" style="border:1px solid gray; ">-->
<!--        <img class="col-md-12 p-0" src="data:image/png;base64,{{ $post->image }}"/>-->
<!--       </canvas>-->
<!--    </div>-->
<!--    <div>-->
<!--        <input type="button" id="undo" name="undo" value="undo">-->
<!--        <input type="button" id="redo" name="redo" value="redo">-->
<!--    </div>-->
<!--</div>-->

<div id="drawingComp">
		<canvas id="canvas">
		    <!--<img class="card-img-top embed-responsive-item object-fit: cover;" src="data:image/png;base64,{{ $post->image }}"/>-->
        </canvas>
        <!--<img class="card-img-top embed-responsive-item object-fit: cover;" src="data:image/png;base64,{{ $post->image }}"/>-->
    
		<div class="controls">
			<label id="clearLabel"><button id="clear">X</button> Clear</label>
			<label id="blackColourLabel"><button id="blackColour">O</button> Black Colour</label>
			<label id="whiteColourLabel"><button id="whiteColour">O</button> White Colour</label>
		</div>
	</div>


<a href="/posts/{{ $post->id }}">back</a>


<script>
    window.addEventListener("load", () => {
    	const clearButton = document.querySelector('#clear');
    	const blackButton = document.querySelector('#blackColour');
    	const whiteButton = document.querySelector('#whiteColour');
    	const canvas = document.querySelector("#canvas");
    	const ctx = canvas.getContext('2d');
/*global Image */
    	var data = "data:image/png;base64,{{ $post->image }}"; //Base64データ（省略しています）
    	const img = new Image();
    		img.src = data;
    	img.onload = () => {
    		const [img_scaled_width, img_scaled_height] = drawImageToScale(img, ctx);
    		canvas.width = img_scaled_width;
    		canvas.height = img_scaled_height;
    		window.addEventListener('resize', drawImageToScale(img,ctx));
    	}
    	// eventListeners
    	canvas.addEventListener("mousedown", startPosition);
    	canvas.addEventListener("mouseup", finishedPosition);
    	canvas.addEventListener("mousemove", draw)
    	// variables
    	let painting = false;
    	function startPosition(e){
    		painting = true;
    		draw(e);
    	}
    	function finishedPosition(){
    		painting = false;
    		ctx.beginPath();
    	}
    	function draw(e){
    		if (!painting)
    			return;
    		ctx.lineWidth = 3;
    		ctx.lineCap = 'round';
    		ctx.lineTo(e.clientX, e.clientY);
    		ctx.stroke();
    		ctx.beginPath();
    		ctx.moveTo(e.clientX, e.clientY);
    	}
    	clearButton.addEventListener('click', () => clearCanvas(img, ctx, canvas.width, canvas.height));
    	blackButton.addEventListener('click', () => ctx.strokeStyle = "#000000");
    	whiteButton.addEventListener('click', () => ctx.strokeStyle = "#ffffff");
        });
        function drawImageToScale(img, ctx){
        	const img_width = 1000;
        	const scaleFactor = img_width / img.width;
        	const img_height = img.height * scaleFactor;
        	ctx.drawImage(img, 0, 0,img_width,img_height);
        	return [img_width,img_height];
        }
        function clearCanvas(img,ctx,img_scaled_width,img_scaled_height){
        	ctx.clearRect(0,0, img_scaled_width, img_scaled_height);
        	drawImageToScale(img, ctx);
        }
    </script>
<!--<script>-->
<!--var data = "data:image/png;base64,{{ $post->image }}"; //Base64データ（省略しています）-->
 
<!--function setBase64(){-->
<!--  //2Dコンテキストのオブジェクトを生成する-->
<!--  var cvs = document.getElementById('canvas');-->
<!--  var ctx= cvs.getContext('2d');-->
 
<!--  //画像オブジェクトを生成-->
<!--  var img = new Image();-->
<!--  img.src = data;-->
 
<!--  //画像をcanvasに設定-->
<!--  img.onload = function(){-->
<!--    ctx.drawImage(img, 0, 0, 200, 200);-->
<!--  }-->
<!--}-->
<!--</script>-->
<!--<script src="{{ asset('/js/drow.js') }}"></script>-->
@endsection