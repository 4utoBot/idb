<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
        $db_config=@new mysqli('localhost','root','','evidence_17_aug');
        $sql="SELECT * FROM product_detail";
        $data=$db_config->query($sql);

        echo "<table border='1'><tr><th>Manufacturer Id</th><th>Product</th><th>Price</th></tr>";

        while($result=$data->fetch_assoc()){
        	echo "<tr><td>". $result['manufacturer_id']."</td><td>".$result['name']."</td><td>".$result['price']."</td></tr>";
        }
        echo "</table>";
	 ?>
</body>
</html>