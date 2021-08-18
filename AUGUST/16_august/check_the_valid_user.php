<?php 
$mysqli=@new mysqli("localhost","root",""," fifteenaug"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Validation Check</title>
</head>
<body>
	<?php 
	if(isset($_POST['submit'])){
		extract($_POST);

		$sql="SELECT * FROM user WHERE username='$user' AND password='$pass' ";


         $result=$mysqli->query($sql);

         $final=$result->num_rows;

         if($final==1){
         	echo "Your Login Info is Valid";
         }else{
         	echo "Your Login info is Invalid";
         }
     }
 ?>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		
		<input type="text" name="user" placeholder="Enter Username"> <br>
		<input type="password" name="pass" placeholder="Enter Pass"> <br>
		<input type="text" name="phn" placeholder="Phone Number"> <br>
		<input type="submit" name="submit" value="CHECK">
	</form>
</body>
</html>