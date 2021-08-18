<?php 
$myspli=@new mysqli("localhost","root","","wdpf47_company"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Manufacturer ENtry</h2>
	<?php 
          if (isset($_POST['submit'])) {
          	extract($_POST);

          	$sql= "CALL add_manufacturer('$name', '$address','$contact')";

          	$mysqli->query($sql);
          	if($mysqli->affected_rows){
          		echo "YES";
          	}
	?>

	<form action="" method="post">
		<input type="text" name="name" placeholder="NAme"><br>
		<textarea name="address" id="" cols="24" rows="6" placeholder="adress"></textarea> <br>
		<input type="text" name="contact" placeholder="Enter Number"> <br>
		<input type="submit" name="submit" value="SEND">
	</form>
</body>
</html>