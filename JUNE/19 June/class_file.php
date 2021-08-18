<?php 
class Student{
	private $name;
	private $email;
	private $phone;

	public function setInfo($name,$email,$phone){
		$this->name=$name;
		$this->email=$email;
		$this->phone=$phone;

	}

	public function getInfo(){
		$x=$this->name;
		$y=$this->email;
		$z=$this->phone;
		echo "<h2>Here is my all formation</h2>";

		echo "Name: " . $x . "<br>";
		echo "Email: " . $y . "<br>";
		echo "Phone: " . $z . "<br>";
	}

 }?>
