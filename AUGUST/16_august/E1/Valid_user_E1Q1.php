<?php 
$mysqli =@new mysqli("localhost","root","","wdpf47_company");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Login FOrm</title>
 	<style>
 		.rd {font-size: 25px;
 			background-color: red;
 			color: white;
 		}

 		.gren{font-size: 25px;
 			background-color: green;
 			color: white;
 		}
 	</style>
 </head>
 <body>
 	<h2>Login Form</h2>

<?php
     if(isset($_POST['login'])){
     	extract($_POST);

     $sql =	"SELECT * FROM user WHERE username='$user' AND password='$pass' ";

     	$result = $mysqli->query($sql);
     	
     	if($result->num_rows){
     		echo "<div class='gren'> Username and pass is valid </div>";
     	} else {
     		echo "<div class='rd'> Invalid username and pass </div>";
     	}
     }
?>

 	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
 		
 		<input type="text" name="user" placeholder="ENter USer NAme"><br>
 		<input type="pass" name="pass" placeholder="password"> <br>
 		<input type="submit" name="login" value="LOGIN">
 	</form>
 </body>
 </html>