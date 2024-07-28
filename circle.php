<?php
$im = imagecreatetruecolor(120, 120);
$_color2 = imagecolorallocate($im,255,255,255);
$_color = imagecolorallocate($im,0,0,255);
imagefilledrectangle($im,0,0,120,120,$_color2);
imagearc($im,  60,  75,  50,  50,  0, 360, $_color);

header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
?>
