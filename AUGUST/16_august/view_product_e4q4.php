<?php 
$mysqli=@new mysqli("localhost","root",""," fifteenaug"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
     $sql="SELECT * FROM product_details";
     $result=$mysqli->query($sql);
     

	?>
</body>
</html>