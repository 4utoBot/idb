<?php 

$datas=file('mytextfile.txt');

// echo "<pre>";
// print_r($datas);

// foreach ($datas as $data) {
// 	list($name,$email,$age)=explode("," , $data);
// 	echo "Name: $name, Email: $email, Age: $age <br>";
// }

echo "<table border=1>";
echo "<tr><td>Name</td><td>Email</td><td>Age</td></tr>";

foreach ($datas as $key) {
	list($name,$email,$age)=explode(",", $key);
	echo "<tr><td>$name</td><td>$email</td><td>$age</td></tr>";
	# code...
}
echo "</table>";
 ?>
