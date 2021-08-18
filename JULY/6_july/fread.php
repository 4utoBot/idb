<?php
$file='file.txt';
//open the file for reading
#echo filesize($file);
$fh =fopen($file, 'r');
//read in the entire file
echo $userdata= fread($fh, filesize($file));
//close the file handle
fclose($fh); 
 ?>