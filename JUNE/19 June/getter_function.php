<?php 
class Employee{
	private $name;
	public $email;
	public $phone;

	
	public function setName($username){
		$this->name=$username;
	}

	public function getName(){
		return $this->name;
	}
}

$emp1 = new Employee;
$emp1->setName("Arif");
$emp1->email="arif@gmail.com";
$emp1->phone="01677226743";

$emp2 = new Employee;
$emp2->setName("Imran");
$emp2->email="Imran@gmail.com";
$emp2->phone="01678945632";


echo $emp2->getName();
 ?>
