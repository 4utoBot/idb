<?php 

class fruit{
	public $name;
	public $color;

	public function __construct($n,$c){
		$this->name=$n;
		$this->color=$c;
	}

	public function intro(){
		echo "The fruit is{$this->name} and the color is {$this->color}.<br>";
	}
} //End fruit class

class Strawberry extends fruit{
	public function message(){
		echo "Am I a fruit or berry?";
	}
}


$fr1=new fruit("Apple","Green");
$fr1->intro();
$fr2=new fruit("Mango","Yellow");
$fr2->intro();
$fr3=new Strawberry("Strawberry","Red");
$fr3->message();
$fr3->intro();

//print_r($fr2);
?>