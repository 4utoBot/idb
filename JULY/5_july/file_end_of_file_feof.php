<?php 
$file ="myfile.txt";

$fh=fopen($file, 'r'); # we can use W for write mode



while (!feof($fh)) {
    echo fgets($fh)."<br>";
     // code...
 } ?>