<?php 

$mysqli = @new mysqli("localhost", "root", "", "fifteenaug");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Manufacturer Entry</h2>
<?php 
  if(isset($_POST['submit'])){
  	extract($_POST);

  	$sql = "CALL manufacturer_entry('$name','$address', '$contact')";
  	// "INSERT INTO manufacturer VALUES(NULL, '$name', '$address', '$contact')";

  	$mysqli->query($sql);
  	if($mysqli->affected_rows){
  		echo "Yes";
  	}
  	
  }

?>

	<form action="" method="post">
		<input type="text" name="name" placeholder="enter  name"><br>
		<textarea name="address" cols="30" rows="10"></textarea>
		<input type="text" name="contact" placeholder=" enter contact number">
		<input type="submit" name="submit" value="SEND">
	</form>
</body>
</html>