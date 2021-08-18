<?php 
// $x=array("a","b","c","d","e");
// $y=array_unshift($x,"x");
// $z=array_shift();

// echo $x;
$states = array("Ohio", "New York");
array_unshift($states, "California", "Texas");
echo "<pre>";
print_r($states);

 ?>