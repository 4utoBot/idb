<?php 
$file ="http://localhost/php/5_july/dir_name.php" ;
$bytes =filesize($file);
$kb = round($bytes/1024, 3);
echo $mb = round($kb/1024, 2);?>