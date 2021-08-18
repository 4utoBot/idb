<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Students Data Entry Form</h2>
	<?php  
	if(isset($_POST['submit'])){
		extract($_POST);
		require_once ("db_config.php");

		$sql = "INSERT INTO students VALUES('$id', '$st_name', '$gender','$district','$profile', '$education')";
		$result = $mysqli->query($sql);
		$data = $mysqli->affected_rows;
		if($data){
			echo "Successfully Data inserted<br>";
		}
	}

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<label for="">Id: </label>
		<input type="text" name="id" placeholder="Input your Id"><br><br>

		<label for="">Name: </label>
		<input type="text" name="st_name" placeholder="Enter Students name"><br><br>

		<label for="">Gender: </label>

		Male <input type="radio" name="gender" value="male">
		Female <input type="radio" name="gender" value="female">
		<br><br>

		<label for="">Dustrict: </label>
		<select name="district" id="">
			<option value="Dhaka">Dhaka</option>
			<option value="Rajshahi">Rajshahi</option>
			<option value="Khulna">Khulna</option>
		</select><br><br>

		<label for="">Profile:</label>
		<textarea name="profile" id="" cols="20" rows="10"></textarea><br><br>

		<label for="">Education: </label>
		SSC <input type="checkbox" name="education" value="SSC">
		HSC <input type="checkbox" name="education" value="HSC">
		B.Sc <input type="checkbox" name="education" value="B.Sc">
		M.Sc <input type="checkbox" name="education" value="M.Sc"><br><br>

		<input type="submit" name="submit" value="SEND">
		
	</form>
	<br><br>
	<a href="students.php">Students List</a>
	
</body>
</html>