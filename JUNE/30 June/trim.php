<?php 
$str1="Hello World!";
$str2="How are you?";
$str1=trim($str1,'d!');
$str2=trim($str2,'H');
$str3=$str1.$str2;
echo $str3;
 ?>