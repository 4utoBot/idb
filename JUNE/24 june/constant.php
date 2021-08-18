<?php 
class SimpleClass{
	public $var='Today is Thursday';
	public const B="Bangladesh";

	public function displayVar(){
		// echo $this->var;
		echo SimpleClass::B;
	}
}


$obj1=new SimpleClass;
//echo $obj1->var();
$obj1->displayVar():

//echo SimpleClass::B;




 ?>