<?php 
class GrandFather
{
	protected $name='Kamal Uddin is Grand Father Name';
	//A public variable;
	public function getName(){
		return $this->name;
	}
}
class Daddy extends Grandfather //inherritade class
{
public function displayGrandFaName()
{
	return $this->name; //the public variable is available to the inheritade class;

}
} 
?>