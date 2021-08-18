<?php 
$cost=20.99;
$tax=0.0575;
function calculateCost(&$cost,$tax){
	//modify the $cost variable;
	$cost=$cost+($cost*$tax);
	//performs some random change to the $tax variable;
	$tax=$tax+4;
} 
calculateCost($cost,$tax);

printf("Tax is %.2f%%",$tax*100);
printf("Cost is: $%01.2f",$cost);

?>