<?php 
$myspli=@new mysqli("localhost","root","","wdpf47_company"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


	<h3>List</h3>
	<form action="" method="post">
		<select name="company" id="">
			<option value="">Select One</option>
			<?php
			$sql="SELECT * FROM manufacturer";
			$result=$mysqli->query($sql);
			while($row= $result->fetch_assoc()){ ?> 
			<option value='<?php echo $row['id']; ?>' >
				<?php echo $row['name']; ?>
				</option>
			<?php } ?>
			}
			?>
		</select>
		<input type="submit" name="submit" value="DELETE">
	</form>
</body>
</html>