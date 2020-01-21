<?php

//const variable
$redline = 0.3; //ระยะ diecutline
$peek = 1.3; //ปีกปะกาว

//input
$x = 5.2; 
$y = 4.2;
$z = 5.2;

//Box ฝาเสียบก้นเสียบ
$box_width = $redline+$peek+$x+$z+$x+$z+$redline;
$box_height1 = $redline+$peek+$z+$y+$redline;

//paper setting
$a = 0.1;
$b = 0.1;
$c = 0.1;
$clipper = 1;

//paper area
$paper_width = 42-$a-$c;
$paper_height = 27.9-$clipper-$b;


//แนวนอน
$right =   floor($paper_width/$box_width);
$top = floor($paper_height/$box_height1);


//แนวตั้ง
$right2 = floor($paper_width/$box_height1);
$top2 = floor($paper_height/$box_width);

echo "วางแนวนอนได้ ". $right*$top;
echo "วางแนวตั้งได้ ". $right2*$top2;

?>