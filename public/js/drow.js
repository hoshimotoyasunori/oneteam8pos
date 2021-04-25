
// window.addEventListener("load", () => {
// 	const clearButton = document.querySelector('#clear');
// 	const blackButton = document.querySelector('#blackColour');
// 	const whiteButton = document.querySelector('#whiteColour');
// 	const canvas = document.querySelector("#canvas");
// 	const ctx = canvas.getContext('2d');
	
	
// /*global Image */

// 	var data = "data:image/png;base64,{{ $post->image }}"; //Base64データ（省略しています）
// 	const img = new Image();
// // 	img.src = "public/images/posts9.png";
// 		img.src = data;

// 	img.onload = () => {
// 		const [img_scaled_width, img_scaled_height] = drawImageToScale(img, ctx);
// 		canvas.width = img_scaled_width;
// 		canvas.height = img_scaled_height;
// 		window.addEventListener('resize', drawImageToScale(img,ctx));

// 	}

// 	// eventListeners
// 	canvas.addEventListener("mousedown", startPosition);
// 	canvas.addEventListener("mouseup", finishedPosition);
// 	canvas.addEventListener("mousemove", draw)

// 	// variables
// 	let painting = false;

// 	function startPosition(e){
// 		painting = true;
// 		draw(e);
// 	}

// 	function finishedPosition(){
// 		painting = false;
// 		ctx.beginPath();
// 	}

// 	function draw(e){
// 		if (!painting)
// 			return;
// 		ctx.lineWidth = 3;
// 		ctx.lineCap = 'round';
// 		ctx.lineTo(e.clientX, e.clientY);
// 		ctx.stroke();
// 		ctx.beginPath();
// 		ctx.moveTo(e.clientX, e.clientY);
// 	}
  
// 	clearButton.addEventListener('click', () => clearCanvas(img, ctx, canvas.width, canvas.height));
// 	blackButton.addEventListener('click', () => ctx.strokeStyle = "#000000");
// 	whiteButton.addEventListener('click', () => ctx.strokeStyle = "#ffffff");
// });

// function drawImageToScale(img, ctx){
// 	const img_width = 650;
// 	const scaleFactor = img_width / img.width;
// 	const img_height = img.height * scaleFactor;
// 	ctx.drawImage(img, 0, 0,img_width,img_height);
// 	return [img_width,img_height];
// }


// function clearCanvas(img,ctx,img_scaled_width,img_scaled_height){
// 	ctx.clearRect(0,0, img_scaled_width, img_scaled_height);
// 	drawImageToScale(img, ctx);
// }
 
 

// // JavaScriptのグローバル変数群

// var CANVAS_SIZE;
// var undoDataStack = [];
// var redoDataStack = [];
// var mouseDown = false;

// $(function () {

//     // 画面読み込み時のロード処理

//     $(document).ready(function () {
//         // キャンバスのサイズを設定
//         $('#canvas').css('width', '600px');
//         $('#canvas').css('height', '600px');
//         // キャンバスの属性を設定
//         canvas = document.getElementById('canvas');
//         canvas.width = 600;
//         canvas.height = 600;
//         CANVAS_SIZE = canvas.clientWidth;
//         // 描画開始 → 描画中 → 描画終了
//         canvas.addEventListener('mousedown', startDraw, false);
//         canvas.addEventListener('mousemove', drawing, false);
//         canvas.addEventListener('mouseup', endDraw, false);
//     });
//     // undo
//     $("#undo").click(function () {
//         if (undoDataStack.length <= 0) {
//             return;
//         }
//         canvas = document.getElementById('canvas');
//         context = canvas.getContext('2d');
//         redoDataStack.unshift(context.getImageData(0, 0, canvas.width, canvas.height));
//         var imageData = undoDataStack.shift();
//         context.putImageData(imageData, 0, 0);
//     });
//     // redo
//     $("#redo").click(function () {
//         if (redoDataStack.length <= 0) {
//             return;
//         }
//         canvas = document.getElementById('canvas');
//         context = canvas.getContext('2d');
//         undoDataStack.unshift(context.getImageData(0, 0, canvas.width, canvas.height));
//         var imageData = redoDataStack.shift();
//         context.putImageData(imageData, 0, 0);
//     });
// });
// // 描画開始
// function startDraw(event) {
//     // 描画前処理をおこないマウス押下状態にする。
//     beforeDraw();
//     mouseDown = true;
//     // クライアント領域からマウス開始位置座標を取得
//     wbound = event.target.getBoundingClientRect();
//     stX = event.clientX - wbound.left;
//     stY = event.clientY - wbound.top;
//     // キャンバス情報を取得
//     canvas = document.getElementById("canvas");
//     context = canvas.getContext("2d");
// }
// // 描画前処理
// function beforeDraw() {
//     // undo領域に描画情報を格納
//     redoDataStack = [];
//     canvas = document.getElementById('canvas');
//     context = canvas.getContext('2d');
//     undoDataStack.unshift(context.getImageData(0, 0, canvas.width, canvas.height));
// }
// // 描画中処理
// function drawing(event) {
//     // マウスボタンが押されていれば描画中と判断
//     if (mouseDown) {
//         x = event.clientX - wbound.left;
//         y = event.clientY - wbound.top;
//         draw(x, y);
//     }
// }
// // 描画終了
// function endDraw(event) {
//     // マウスボタンが押されていれば描画中と判断
//     if (mouseDown) {
//         context.globalCompositeOperation = 'source-over';
//         context.setLineDash([]);
//         mouseDown = false;
//     }
// }
// // 描画
// function draw(x, y) {
//     canvas = document.getElementById("canvas");
//     context = canvas.getContext("2d");
//     context.beginPath();
//     context.strokeStyle = "black";
//     context.fillStyle = "black";
//     context.lineWidth = 2;
//     context.lineCap = "round";
//     context.globalCompositeOperation = 'source-over';
//     context.moveTo(stX, stY);
//     context.lineTo(x, y);
//     context.stroke();
//     stX = x;
//     stY = y;
// }
