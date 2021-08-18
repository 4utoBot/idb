<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products ENtry FOrm</title>
</head>
<body>
	<h2>Entry form</h2>
<?php 
	if (isset($_POST['submit'])) {
		extract($_POST);
		require_once ("db_config.php");
		$sql ="INSERT INTO products VALUES('$sku','$pr_name','$pr_price')";
		$mysqli->query($sql);
	}
 ?>




	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="sku" placeholder="Enter sku"> <br>
		<input type="text" name="pr_name" placeholder="Enter Your Product NAme"> <br>
		<input type="text" name="pr_price" placeholder="Enter Your Price"> <br>
		<input type="submit" name="submit" value="SEND">
	</form>

	<a href="products.php">Products Lists</a>
</body>
</html>