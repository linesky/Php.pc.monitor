<?php
$im = imagecreatetruecolor(120, 120);
$_color2 = imagecolorallocate($im,255,255,255);
$_color = imagecolorallocate($im,0,0,255);
imagefilledrectangle($im,0,0,120,120,$_color2);
imagefilledrectangle($im,10,20,30,100,$_color);
imagefilledrectangle($im,40,20,60,100,$_color);
imagefilledrectangle($im,70,20,90,100,$_color);
header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
?>
