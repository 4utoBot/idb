<?php 
class Member{
	public $username="";
	private $loggedIn=false;
	public function login(){
		$this->loggrdIn=true;
	}
	public function logout(){
		$this->loggedIn=false;
	}
	public function isLoggedIn(){
		return $this->loggedin;
	}

 }
$mem1=new Member;
$mem1->username='Kowshar alam';
$mem1->login;
echo $mem1->username . "is". ($mem1->isLoggedIn()
	? "Logged in" : "Logged Out");

$mem1->logout();

echo "<br>" $mem1->username . "is" . ($mem->isLoggedIn()
	? "Logged in":"Logged out");
 

 ?>
