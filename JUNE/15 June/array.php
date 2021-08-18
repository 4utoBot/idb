<?php 	
//$city=array();

$city["Bangladesh"]="Dhaka";
$city[]="Cumilla";
$city[]="Barisal";

echo "<pre>";
print_R($city);

$cities=[
	"Dhaka"=>array("Male"=>5000,"Female"=>3000),
	"Rajshahi"=>array("Male"=>4000,"Female"=>3000),
	"Khulna"=>array("Male"=>7000,"Female"=>5000)
];
 print_r($cities);
 echo $cities["Dhaka"]["Male"];


 ?>