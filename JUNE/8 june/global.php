<?php 
//function addit(){
//	global $somevar;
//	$somevar++;
//	echo "somevar is $somevar";

//}
//addit();  

//echo "<pre>";
//print_r($GLOBALS)
?>

<?php 
$somevar2=20;
  function addit(){
  	$GLOBALS["somevar2"]++

  }
  addit2();
  echo "somevar2 is ".$GLOBALS["somevar2"];
 ?>