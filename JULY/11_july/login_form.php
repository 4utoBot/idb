<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		if () {
			// code...
		}
	 ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="">User ID: </label> <input type="text" name="usid" placeholder="Enter Your Id here"> <br><br>
		<label for="">Password: </label> <input type="password" name="paswd" placeholder="Enter Your password"> <br><br>
		<input type="submit" name="submit" value="SUBMIT">
	</form>
</body>
</html>