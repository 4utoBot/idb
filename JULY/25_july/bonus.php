<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bonus Calculation</title>
</head>
<body>
	<?php 

	if (isset($_POST['submit'])) {
		require_once("db_config.php");
		
		$id = $_POST['emp_id'];
		$sql ="SELECT calculate_bonus($id)";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array();

		echo $row[0];

	 
	 } 
	 ?>
	<h2>Employee List</h2>

	<form action="">
		<select name="emp_id" id="">
			<option value="1">Kowshar</option>
			<option value="2">Mainul</option>
			<option value="3">Imran</option>
		</select>
		<input type="submit" name="submit" value="CALCULATE BONUS">
	</form>
</body>
</html>