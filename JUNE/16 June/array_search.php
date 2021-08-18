<?php 
#vaccination date

$vaccin_date=[

	"shylhet"=>"1 july 2021",
	"Rajshahi"=>"2 July 2021",
	"Jhalokathi"=>"3 july 2021"
];



$city=array_search("3 july 2021", $vaccin_date);

if ($city) {echo "$city is sheduled for Vaccine";}
	else{echo "There is no schedule";
	# code...
};
?>