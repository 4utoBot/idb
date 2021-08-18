<?php 
$file =file("myfile.txt");
print_r($file);

echo "<br>";

foreach($file as $data){
	list($name,$email,$number)=explode(",", $data);
	echo "<p>Name: $name Email: $email Number: $number</p>";
}
?>