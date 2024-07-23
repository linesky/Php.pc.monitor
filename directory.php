<?php
$dir="./";
$mems = null;
if(is_dir($dir)){
    if ($f1= opendir($dir)){
        while(($file=readdir($f1))!= false){
            $mems = $mems . $file . "\n" ;
        }
        closedir($f1);
    }
}
echo "\033[47;34m$mems"
?>
