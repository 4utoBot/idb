<?php 
$students=[
 ["Name"=>"Arif","Email"=>"arif@gmail.com","Phone"=>"12345"], 
 ["Name"=>"Boltu","Email"=>"Boltu@gmail.com","Phone"=>"12345"],
 ["Name"=>"Badam","Email"=>"Badam@gmail.com","Phone"=>"12345"],
 ["Name"=>"Potla","Email"=>"Potla@gmail.com","Phone"=>"12345"],
 ["Name"=>"Keltu","Email"=>"Keltu@gmail.com","Phone"=>"12345"]

 ];

 $names=array_column($students, "Name");
 echo "<pre>";
 print_r($names);
 ?>