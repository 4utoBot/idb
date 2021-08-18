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
 		$sql = "SELECT id, name, gender, district, profile, education  FROM students";
 		$result = $mysqli->query($sql);
 		
 		?>

<h2>Students Table</h2>
 		<table border="1">
 			<tr>
 				<th>ID</th>
 				<th>Name</th>
 				<th>Gender</th>
 				<th>District</th>
				 <th>Profile</th>
				 <th>Education</th>
				 <th>Edit</th>
				 <th>Delete</th>
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
 				<td>
 				<a href="student_update.php?id=<?php echo  $row->id; ?>"><img src="pencil.jpg" alt="" height="30" width="30"></a>	</td>
				 
				 <td><a onclick="return confirm('Are you sure to delete this list')" href="student_delete.php?id=<?php echo  $row->id; ?>"><img src="bin.jpg" alt="" height="30" width="30"></a></td>
 			</tr>
<?php } ?>
 		</table>
 		<?php echo "Total ".  $result->num_rows . " available students"; ?>

<?php
 		$mysqli->close();
  ?>
<br><br>
  <a href="student_update.php" target="_blank">Student update</a> <br>
  <a href="student_insert.php" target="_blank">Student insert</a>
 	
 </body>
 </html>