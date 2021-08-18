<?php 
function taxCalculation($price,$taxrate){
	$total=$price+$price*$taxrate;
	return $total;

} 
#echo taxCalculation(500,0.05);

$myprice=15000;
$govrate=0.15;

echo taxCalculation($myprice,$govrate);
?>