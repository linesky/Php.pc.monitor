<?php
$memsx = shell_exec("sudo service kmod start");
$mems = shell_exec("sudo sensors");
echo "\033[47;34m$mems"
?>
