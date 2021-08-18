<?php 
function person(){
	$details=["Abu Sayed Rana","rana@gmail.com","Mirpur"];
	return $details;

}
$person=person();
//echo $name;
//echo "<pre>"
//var_dump($person);

list($x,$y,$z)=$person;

echo "Name:$x.<br>";
echo "Email:$y.<br>";
echo "Address:$z.<br>";

 ?>