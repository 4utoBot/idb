<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$path="uploads/";
	echo "<pre>";
	#print_r($_FILES);
	echo $name= $_FILES['myfile']['name'];
	echo "<br>";
	echo $_FILES['myfile']['size'];
	echo "<br>";
	echo $tmp= $_FILES['myfile']['tmp_name'];
	echo "<br>";
	echo $_FILES['myfile']['error'];
	echo "<br>";
	echo $_FILES['myfile']['type'];
	echo "<br>";

	move_uploaded_file($tmp, $path.$name);

	 ?>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile"> <br>
		<input type="submit" value="UPLOAD" name="submit">
	</form>
</body>
</html>