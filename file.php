<?php
$f1=fopen("map.txt","r");
$mems = fread($f1,filesize("map.txt"));
fclose($f1);
echo "\033[47;34m$mems"
?>
