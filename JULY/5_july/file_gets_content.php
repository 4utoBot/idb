<?php 
$x = file_get_contents("myfile.txt");
$y = explode("\n", $x);

#1st method
// echo "<pre>";
// print_r($y);

#2nd method
foreach ($y as $person) {
	list($name,$email,$number)=explode(",",$person);
	echo "Name: $name Email: $email Phone: $number <br>";
	// code...
}
 ?>