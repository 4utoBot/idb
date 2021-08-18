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
		$email="admin@gmail.com";
		$password="123456";

		extract($_POST);
		if ($email==$yemail && $password==$ypass) {
			
			echo "Email and password are matched <br>";
			echo "<a href='home.php'>Go TO Home</a>";// code...
		}
		// code...
	}
	?>

	<h2>LOGIN FOrm</h2>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		

		<input type="text" name="yemail" placeholder="Email"><br>
		<input type="password" name="ypass" placeholder="PAssword"> <br>
		<input type="submit" name="submit" value="LOGIN">
	</form>

</body>
</html>