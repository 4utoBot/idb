<?php 
class Person{
	private $name="";
	private $age="";

	public function setName($name){
		return $this->name=$name;
	}

	public function setAge($age=20){
		return $this->age=$age;
	}
	public function getInfo(){
		echo "My Name is {$this->name} and my age is {this->age}";
	}



} ?>
<?php  ?>
