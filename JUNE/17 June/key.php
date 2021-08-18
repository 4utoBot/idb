<?php 
$capitals=array("Ohio"=>"Columbus","Iowa"=>"Des moines");
$capitals["Mexico"]="Mexico City";

//echo key($capitals);

while ($city=key($capitals)) {
	echo $city."<br>";
	next($capitals);
	# code...
};
