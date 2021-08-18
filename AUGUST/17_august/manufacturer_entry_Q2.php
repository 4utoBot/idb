<?php $mysqli = @new mysqli("localhost", "root", "", "evidence_17_aug"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2 style="color:blue">Insert Data into Manufacturer Table</h2>
<?php 
  if(isset($_POST['submit'])){
  	extract($_POST);

  	$sql = "CALL manufacturer_entry('$name','$address', '$contact')";
  	
  	  	$mysqli->query($sql);
  	if($mysqli->affected_rows){
  		echo "Data Has Been Inserted Successfully!";
  	}  	
  }
?>
<form action="" method="post">
		<label for="">Manufacturer Name:</label><br>
		<input type="text" name="name" placeholder="Enter Manufacturer Name"><br> <br>
		<label for="">Manufacturer Address:</label><br>
		<textarea name="address" cols="24" rows="10" placeholder="Enter Address"></textarea><br><br>
		<label for="">Manufacturer Conatact Number</label> <br>
		<input type="text" name="contact" placeholder=" Enter contact number"><br><br>
		<input type="submit" name="submit" value="INSERT DATA">
	</form>
</body>
</html>