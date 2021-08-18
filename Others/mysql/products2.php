<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	 <table border="1">
 	<tr>
 		<th>SKU</th>
 		<th>Product</th>
 		<th>Price</th>
 	</tr>
 	<?php
 	while($row=$result->fetch_object()){?>
 		<tr>
 			<td><?php echo $row->sku; ?></td>
 			<td><?php echo $row->name; ?></td>
 			<td><?php echo $row->price; ?></td>
 			<td><a href="products_delete.php?sku=<?php echo $row->sku; ?>">Delete</a> </td>
 		</tr>
 	<?php } ?>
 	
 </table>
 <?php $mysqli->close(); ?>
 <br><br>
    <a href="product_entry.php">New Product</a>
</body>
</html>