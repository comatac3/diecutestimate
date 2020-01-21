
    function diecut(name,xx,yy,zz,ver,her){
      function setupCanvas(canvas) {
        var dpr = window.devicePixelRatio || 0;
        var rect = canvas.getBoundingClientRect();
        //A3
        canvas.width = 42*20 * dpr;
        canvas.height = 29.7*20 * dpr;
        var ctx = canvas.getContext('2d'); 
        ctx.scale(dpr, dpr);
        return ctx;
      }



      var ctx = setupCanvas(document.getElementById(name));
      var peek = 1.3;
      var ratio = 20;
      ctx.rotate(-Math.PI/2);
      her_w = peek+zz+yy+0.3+0.3;
      for (var x=1; x<=her; x++){
        //alert(x+" "+her);
        draw(xx,yy,zz,-29.7+0.3+1,0.3+0.1+((x-1)*her_w));
      }

      
      function draw(xx,yy,zz,startxx,startyy){
        var redline = 0.3;
        var gapgap = 0.1;
        var startx = startxx*ratio;
        var starty = startyy*ratio;
        var p = peek*ratio;  
        var y = yy*ratio;
        var z = zz*ratio;
        var x = xx*ratio;
        var gap = gapgap*ratio;
        var dieline = redline*ratio;
        // var fullcanvasy = z+y+starty+z+p+p+dieline+20;
        // var fullcanvasx = startx+p+2*x+2*z+20+5+20;
        
        ctx.beginPath();
        ctx.fillStyle = "#FF0000";
        ctx.fillRect(-(29.7)*ratio, 0, 1*ratio, 42*ratio);
        ctx.stroke();
  
        ctx.beginPath();
        ctx.fillStyle = "#FFFFF0";
        ctx.fillRect(0,0,42*ratio,29.7*ratio)
        ctx.stroke();
  
        
        //ctx.scale(2, 2);
        
        //ปีกปะกาว1
        ctx.beginPath();
        ctx.moveTo(p+startx,z+starty+p);
        ctx.lineTo(0+startx,z+p+starty+p-15);
        ctx.lineTo(0+startx,z+y-p+starty+p+15);
        ctx.lineTo(p+startx,z+y+starty+p);
        ctx.strokeStyle = "green";
        ctx.stroke();
        
        //body1
        ctx.beginPath();
        ctx.rect(p+startx, z+starty+p, x, y);
        ctx.strokeStyle = "green";
        ctx.stroke();
        //body2
        ctx.beginPath();
        ctx.rect(p+startx+x, z+starty+p, z, y);
        ctx.strokeStyle = "green";
        ctx.stroke();
        //body3
        ctx.beginPath();
        ctx.rect(p+startx+x+z, z+starty+p, x, y);
        ctx.strokeStyle = "green";
        ctx.stroke();
        //body4
        ctx.beginPath();
        ctx.rect(startx+p+x+z+x, z+starty+p, z, y);
        ctx.strokeStyle = "green";
        ctx.stroke();
        //body5
        ctx.beginPath();
        ctx.rect(p+startx, z+starty+y+p, x, z);
        ctx.strokeStyle = "green";
        ctx.stroke();
        //ปีกปะกาว2
        ctx.beginPath();
        ctx.moveTo(startx+p,z+starty+z+y+p);
        //ctx.lineTo(startx+p+p,z+y+z+p+starty+p);
        ctx.arcTo(startx+p,z+y+z+p+starty+p ,startx+x,z+y+starty+z+p+p, 20);
        ctx.lineTo(startx+x,z+y+starty+z+p+p);
        ctx.arcTo(startx+x+p,z+y+starty+z+p+p ,startx+x+p,z+y+starty+z+p, 20);
        ctx.lineTo(startx+x+3*p-2*p,z+y+starty+z+p);
        ctx.strokeStyle = "green";
        ctx.stroke();
        //body6
        ctx.beginPath();
        ctx.moveTo(startx+p+x,starty+z+y+p);
        ctx.lineTo(startx+p+x+gap*2,starty+z+y+gap*2+p);
        ctx.lineTo(startx+p+x+gap*2,z+y+starty+z*0.6+p);
        //ctx.lineTo(startx+p+x-10*gap+z,z+y+starty+z*0.6+p);
        ctx.arcTo(startx+p+x-10*gap+z,z+y+starty+z*0.6+p,startx+p+x-2*gap+z,starty+z+y+gap*2+p, 20);
        ctx.lineTo(startx+p+x-2*gap+z,starty+z+y+gap*2+p);
        ctx.lineTo(startx+p+x+z,z+y+starty+p);
        ctx.strokeStyle = "green";
        ctx.stroke();
         //body8
        ctx.beginPath();
        ctx.moveTo(startx+p+x,starty+z+p);
        ctx.lineTo(startx+p+x+gap*2,starty+z-gap*2+p);
        ctx.lineTo(startx+p+x+5*gap,starty+z-gap*2-0.3*z+p);
        //ctx.moveTo(startx+p+x+5*gap,starty+z-gap*2-0.3*z+p);
        ctx.arcTo(startx+p+x+2*gap+5*gap,starty+z-gap*2-0.6*z+p ,startx+p+x-2*gap+z,starty+z-gap*2-0.6*z+p, 20);
        ctx.lineTo(startx+p+x-2*gap+z,starty+z-gap*2-0.6*z+p);
        ctx.lineTo(startx+p+x-2*gap+z,starty+z-gap*2+p);
        ctx.lineTo(startx+p+x+z,z+starty+p);
        ctx.strokeStyle = "green";
        ctx.stroke();
        //body9
        ctx.beginPath();
        ctx.rect(p+startx+x+z, starty+p, x, z);
        ctx.strokeStyle = "green";
        ctx.stroke();
        //p3
        ctx.beginPath();
        ctx.moveTo(startx+p+x+z,starty+p);
        ctx.arcTo(startx+p+x+z, starty,startx+p+x+z+p+x-2*p, starty,20);
        //ctx.lineTo(startx+p+x+z+p, starty);
        ctx.lineTo(startx+p+x+z+p+x-2*p, starty);
        ctx.arcTo( startx+p+x+z+x,starty ,startx+p+x+z+x,starty+p, 20);
        ctx.lineTo(startx+p+x+z+x,starty+p)
        ctx.strokeStyle = "green";
        ctx.stroke();
         //body10
         ctx.beginPath();
        ctx.moveTo(startx+p+x+z+x,starty+z+p);
        ctx.lineTo(startx+p+x+z+x+2*gap,starty+z+p-2*gap);
        ctx.lineTo(startx+p+x+z+x+2*gap,starty+z+p-2*gap-0.6*z);
        ctx.arcTo(startx+p+x+z+x-2*gap+z-10*gap,starty+z+p-2*gap-0.6*z,startx+p+x+z+x+z-2*gap,starty+p+z-2*gap,20)
        //ctx.lineTo(startx+p+x+z+x-2*gap+z-5*gap,starty+z+p-2*gap-0.6*z);
        ctx.lineTo(startx+p+x+z+x+z-2*gap,starty+p+z-2*gap);
  
        ctx.lineTo(startx+p+x+z+x+z,starty+p+z);
        ctx.strokeStyle = "green";
        ctx.stroke();
        //body7
        ctx.beginPath();
        ctx.moveTo(startx+p+x+z+x,starty+p+z+y);
        ctx.lineTo(startx+p+x+z+x+2*gap,starty+p+z+y+2*gap);
        ctx.arcTo(startx+p+x+z+x+2*gap+10*gap,starty+p+z+y+0.6*z,startx+p+x+z+x-2*gap+z,starty+p+z+y+0.6*z,20)
        //ctx.lineTo(startx+p+x+z+x+2*gap+10*gap,starty+p+z+y+0.6*z);
        ctx.lineTo(startx+p+x+z+x-2*gap+z,starty+p+z+y+0.6*z);
        ctx.lineTo(startx+p+x+z+x-2*gap+z,starty+p+z+y+2*gap);
        ctx.lineTo(startx+p+x+z+x+z,starty+p+z+y);
        ctx.strokeStyle = "green";
        ctx.stroke();
     
        }
        }
      
    