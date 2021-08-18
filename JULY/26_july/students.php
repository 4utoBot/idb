<?php 
	require_once ("db_config.php");
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
	$sql = "SELECT id, name, gender, district, profile, education FROM students";
 		$result = $mysqli->query($sql);

 	?>

 	<table border="1">
 			<tr>
 				<th>Id</th>
 				<th>Name</th>
 				<th>Gender</th>
 				<th>District</th>
 				<th>Profile</th>
 				<th>Education</th>
 			</tr>

 	<?php		
 		while($row = $result->fetch_object()){ ?>
 			<tr>
 				<td><?php echo  $row->id; ?></td>
 				<td><?php echo  $row->name; ?></td>
 				<td><?php echo  $row->gender; ?></td>
 				<td><?php echo  $row->district; ?></td>
 				<td><?php echo  $row->profile; ?></td>
 				<td><?php echo  $row->education; ?></td>
 				
 			</tr>
<?php } ?>
 		</table>
 		<?php echo "Total ".  $result->num_rows . " Students Data available"; ?>

<?php
 		$mysqli->close();
  ?>
</body>
</html>