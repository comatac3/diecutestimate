







function linedraws(x,y,name){
  function setupCanvas(canvas) {
    var dpr = window.devicePixelRatio || 0;
    var rect = canvas.getBoundingClientRect();
    //A3
    canvas.width = 40+(y)*20 * dpr;
    canvas.height = 40+(x)*20 * dpr;
    var ctx = canvas.getContext('2d'); 
    ctx.scale(dpr, dpr);
    return ctx;
  }
  var ctx = setupCanvas(document.getElementById(name));
  //canvas = document.getElementById(name);
    draws(y,x);
  
    
function draws(xxx,yyy){

var xx = xxx;
var yy = yyy;

var startx = 10;
var starty = 10;
var ratio = 20;

var y = yy*ratio;
var x = xx*ratio;


ctx.beginPath();
ctx.rect(startx, starty, x, y);
ctx.strokeStyle = "green";
ctx.stroke();

//x
ctx.beginPath();
ctx.moveTo(startx,starty-(starty));
ctx.lineTo(startx,starty-2.5);
ctx.lineTo(x+startx,starty-2.5);
ctx.lineTo(x+startx,starty-(starty));
ctx.strokeStyle = "red";
ctx.stroke()

ctx.beginPath();
ctx.save();
ctx.translate(startx+x+3,starty+y/2);
ctx.rotate(0.5*Math.PI);

var rText = parseFloat((y/ratio).toFixed(10))+" cm.";
ctx.fillText(rText , 0, 0);
ctx.restore();


//y
ctx.beginPath();
ctx.moveTo(startx+x+startx+startx,starty);
ctx.lineTo(x+startx+2.5,starty);
ctx.lineTo(x+startx+2.5,starty+y);
ctx.lineTo(startx+x+startx+startx,starty+y);
ctx.strokeStyle = "red";
ctx.stroke()

ctx.beginPath();
ctx.save();
ctx.translate(startx+(y/2),starty-2.5);
//ctx.rotate(Math.PI);

var rText = parseFloat((x/ratio).toFixed(10))+" cm.";
ctx.fillText(rText , 0, 0);
ctx.restore();


}
}