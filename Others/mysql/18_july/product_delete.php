<?php 
require_once("db_config.php");
echo $_GET['sku'];


$sql="DELETE FROM products WHERE sku='$sku'";
$mysqli->query($sql);

echo $mysqli->affected_rows. "products has been deleted";
//header("Location: products.php");

 ?>