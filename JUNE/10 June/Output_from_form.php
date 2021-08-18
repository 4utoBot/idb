<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label for="uname">Name: </label><input type="text" name="uname"> <br>
		<label for="gender">Gender: </label>
		Male <input type="radio" name="gender" value="Male">
		Female <input type="radio" name="gender" value="Female"> <br>

		<label for="address">Address: </label>
		<textarea name="address" id="" cols="10" rows="5"></textarea> <br>

		<label>District: </label>
		<select name="district" id="">
			<option >--Select One--</option>
			<option value="Dhaka">Dhaka</option>
			<option value="Rajshahi">Rajshahi</option>
			<option value="Teknaf">Teknaf</option>
		</select><br>


		<input type="submit" value="Submit">
	</form>
</body>
</html>
<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	echo "<h1>";
	echo "Name: ".$_POST['uname']."<br>";
	echo "Gender: ".$_POST['gender']."<br>";
	echo "Address: ".$_POST['address']."<br>";
	echo "District: ".$_POST['district']."<br>";
	echo "</h1>";
	
}
 ?>
