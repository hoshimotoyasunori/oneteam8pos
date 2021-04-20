
var CANVAS_SIZE;
var undoDataStack = [];
var redoDataStack = [];
var mouseDown = false;
$(function() {
    $(document).ready(function(){
        $('#canvas').css('width', '600px');
        $('#canvas').css('height', '600px');
        canvas = document.getElementById('canvas');
        canvas.width = 600;
        canvas.height = 600;
        CANVAS_SIZE = canvas.clientWidth;
        canvas.addEventListener('mousedown', startDraw, false);
        canvas.addEventListener('mousemove', drawing, false);
        canvas.addEventListener('mouseup', endDraw, false);
    });
    $("#undo").click(function() {
        if (undoDataStack.length <= 0) {
            return;
        }
        canvas = document.getElementById('canvas');
        context = canvas.getContext('2d');
        redoDataStack.unshift(context.getImageData(0, 0, canvas.width, canvas.height));
        var imageData = undoDataStack.shift();
        context.putImageData(imageData, 0, 0);
    });
    $("#redo").click(function() {
        if (redoDataStack.length <= 0) {
            return;
        }
        canvas = document.getElementById('canvas');
        context = canvas.getContext('2d');
        undoDataStack.unshift(context.getImageData(0, 0, canvas.width, canvas.height));
        var imageData = redoDataStack.shift();
        context.putImageData(imageData, 0, 0);
    });
});

function startDraw(event){
    beforeDraw();
    mouseDown = true;
    wbound = event.target.getBoundingClientRect() ;
    stX = event.clientX - wbound.left;
    stY = event.clientY - wbound.top;
    canvas = document.getElementById("canvas");
    context = canvas.getContext("2d");
}

function beforeDraw() {
    redoDataStack = [];
    canvas = document.getElementById('canvas');
    context = canvas.getContext('2d');
    undoDataStack.unshift(context.getImageData(0, 0, canvas.width, canvas.height));
}

function drawing(event){
    if (mouseDown){
        x = event.clientX - wbound.left;
        y = event.clientY - wbound.top;
        draw(x, y);
    }
}

function endDraw(event){
    if (mouseDown){
        context.globalCompositeOperation = 'source-over';
        context.setLineDash([]);
        mouseDown = false;
    }
}

function draw(x, y){
    canvas = document.getElementById("canvas");
    context = canvas.getContext("2d");
    context.beginPath();
    context.strokeStyle = "black";
    context.fillStyle = "black";
    context.lineWidth = 2;
    context.lineCap = "round";
    context.globalCompositeOperation = 'source-over';
    context.moveTo(stX,stY);
    context.lineTo(x,y);
    context.stroke();
    stX = x;
    stY = y;
}
