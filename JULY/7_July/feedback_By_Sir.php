<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){
		  	$n = $_POST['name'];
			$e = $_POST['email'];
			$m = $_POST['message'];
			$m = strip_tags($m);
			$m = htmlentities($m, ENT_QUOTES);
			
			if($n==NULL){
				echo die("You have to enter a name first<br>");
			} else {
				echo "Your name $n <br>";
			}

			if(empty($e)){
				echo die("You have to enter an email<br>");
			} else {
					if(!filter_var($e, FILTER_VALIDATE_EMAIL)){
					echo die("Your Email is invalid<br>");
				} else {
					echo "Your Email $e <br>";
				}
			}

			if($m==""){
				echo "You have to enter message<br>";
			} else {
				echo "Your Message $m <br>";
			}			
			

			
			

		}
	 ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="">Name: </label>
		<input type="text" name="name"><br>

		<label for="">Email</label>
		<input type="text" name="email"><br>

		<label for="">Enter Your Mesaage</label> <br>
		<textarea name="message" cols="30" rows="10"></textarea><br>
		<input type="submit" name="submit" value="SEND">
	</form>
	
</body>
</html>