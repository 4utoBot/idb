<?php 
include "class_file.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		if ($_SERVER['REQUEST_METHOD']=='POST') {
		
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			
			$st = new Student;
			$st->setInfo($name,$email,$phone);
			$st->getInfo();
		}

	 ?>



	<form action="" method="post">
		<input type="text" name="name"><br>
		<input type="text" name="email"><br>
		<input type="text" name="phone"><br>
		<input type="submit" value="Submit">

	</form>
</body>
</html>