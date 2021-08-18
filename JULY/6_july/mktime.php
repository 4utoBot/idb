<?php 
$prev=mktime(20,35,00,7,5,2020);
echo "<br>";
$curr= time();

$res=$curr-$prev;

echo floor($res/(60*60*24*30*12)). " year";




 ?>