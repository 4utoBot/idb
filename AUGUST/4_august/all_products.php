<?php 
$myspli=@new mysqli("localhost","root","","wdpf47_company"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products</title>
</head>
<body>
	<h2>Displaying All Products</h2>
	<?php 
	$sql="SELECT * FROM all_products_view";
	$result= $mysqli->query($sql);
	 ?>

	 <table border="1">
	 	<tr>
	 		<th>ID</th>
	 		<th>Product Name</th>
	 		<th>Price</th>
	 		<th>Manufacturer</th>
	 	</tr>
<?php while($row = $result->fetch_assoc()) { ?>
	 	<tr>
	 		<td><?php echo $row['Product_ID'] ?></td>
	 		<td><?php echo $row['Product_name'] ?></td>
	 		<td><?php echo $row['Price'] ?></td>
	 		<td><?php echo $row['Manufacturer Name'] ?></td>
	 		
	 	</tr>
	 <?php } ?>
	 </table>
</body>
</html>