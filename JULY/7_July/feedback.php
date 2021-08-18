<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<?php 
		if (isset($_POST['submit'])) {
		 	$n= $_POST['name'];
		 	$e= $_POST['email'];
		 	$m= $_POST['message'];

		 	$m=strip_tags($m);

		 	$m= htmlentities($m,ENT_QUOTES);

		 	if (!empty($n)) {
		 	echo "You have to Enter Your NAme";
		 	}else{
		 	echo "Your Name $n <br>";}

		 	if (!filter_var($e,FILTER_VALIDATE_EMAIL)) {
		 		echo "your email is invalid";
		 	}else{
		 	echo "Your Email $e <br>";
		 }
		 	echo "Your Message $m <br>";
		 } ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" name="name"><br>
			<input type="text" name="email"><br>
			<textarea name="message" cols="30" rows="10"></textarea><br>
			<input type="submit" value="SEND">
		</form>
	</body>
</html>