<?php 
ini_set("display_errors", "off");
$file=fopen("mytestfile.txt","r");
if (file_exists("mytestfile.txt")) {$file=fopen("mytestfile.txt","r");
}else{
	die("Error:The File Doesn't exist.");
		}
 ?>
