<?php 

$file='file.txt';
$fh = fopen($file, 'a');
$names= "\t maruf \t Noor";
fwrite($fh, $names);
echo file_get_contents($file);
fclose($fh);?>