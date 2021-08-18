<?php 
#vaccination date

$vaccin_date=[

	"shylhet"=>"1 july 2021",
	"Rajshahi"=>"2 July 2021",
	"Jhalokathi"=>"3 july 2021"
];



if(array_key_exists("Rangpur",$vaccin_date)){
	echo "yes";
}else{
		echo "No";};
 ?>