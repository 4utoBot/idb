<?php 
	require_once("db_config.php");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<?php
 	     $sql="SELECT sku,name,price FROM products";
 	     $reslut = $mysqli->query($sql);

 	     //print_r($result);

 	     	##3 different way

 	     // print_r($result->fetch_row());
 	     // print_r($result->fetch_assoc()){
 	     // 	echo $row['sku']."<br>";
 	     // }

 	     // print_r($result->fetch_array());

 	     while(list($sku,$name,$price)=$result->fetch_row()){
 	     	echo "SKU: ".$sku. "Name: ". $name . "Price: " . $price . "<br>";
 	     }
 	     $mysqli->close();

 	?>
 </body>
 </html>


 