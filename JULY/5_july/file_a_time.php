<?php 
ini_set("date.timezone","Asia/Dhaka") ;

$file = "myfile.txt";

$atime= fileatime($file);
$mtime = filemtime($file);

echo "Access TIme: ".date("m-d-y g:i:sa", $atime);

echo "<br>";

echo "Modification TIme: ".date("m-d-y g:i:sa", $mtime);

?>
