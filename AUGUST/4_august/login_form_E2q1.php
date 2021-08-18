<?php 
$mysqli=@new mysqli("localhost","root","","idb_bisew"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products</title>
</head>
<body>
	<h2>Displaying All products</h2>
	<?php 
	   if (isset($_POST['submit'])){
	    extract($_POST);
	  
	   	$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass' ";
      //echo "$sql";

       $result = $mysqli->query($sql);

       $final = $result->num_rows;
    
       //echo $final;
       if ($final==1) {
       	echo "All Data Validated";
       }else{
       	echo "Your Email and Pass is Invalid";
       }
	   }

	 ?>

	 <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="post">
	 	<input type="email" name="email" placeholder="Enter Your Email"><br><br>
	 	<input type="password" name="pass" placeholder="Enter Your Pass"> <br><br>
	 	<input type="submit" name="submit" value="LOGIN">
	 </form>
</body>
</html>