<?php 
session_start();
if ($_SESSION['email']) {
	header("Location:login.php");
 	// code...
 } 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Hola amigoes!! 
welcome</h1>
<?php echo "your email is: ".$_SESSION['email']; ?>
<br>
<br>
<br>
<a href="logout.php">LogOut</a>
</body>
</html>