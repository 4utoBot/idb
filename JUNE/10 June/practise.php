<?php 
$a=50222;
var_dump($a);
settype($a, "string");
var_dump($a);
 ?>
 <?php 
$b=(string)321;
var_dump($b);

  ?>
  <?php 
  $x= <<<XYZ
  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="">
		<input type="text" name="marks"> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
XYZ;
echo $x; ?>
