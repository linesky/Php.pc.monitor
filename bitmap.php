<?php
$im = imagecreatetruecolor(120, 20);
$_color2 = imagecolorallocate($im,255, 255, 255);
$text_color = imagecolorallocate($im,0, 0, 255);
imagefilledrectangle($im,0,0,120,20,$_color2);
imagestring($im, 1, 5, 0,  'A Simple Text String', $text_color);
header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
?>
