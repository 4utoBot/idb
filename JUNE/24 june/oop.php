<?php 
class oop{
public function __construct(){
	echo"Hello, this is automated<br>";
}
public function sayHello(){
	echo "This is not automated. You have to call this";
}
}
$obj=new oop;
$obj->sayHello();
 ?>
