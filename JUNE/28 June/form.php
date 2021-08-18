<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		Name: <br>
		<input type="text" name="name"><br>
		Email: <br>
		<input type="email" name="email"><br>
		Gender: <br>
		Male: <input type="radio" value="Male" name="gender">
		Female: <input type="radio" value="Female" name="gender"><br>
		District: <br>
		<select name="district">
		<?php
			$dist = array("Dhaka","Comilla","Teknaf");

			foreach($dist as $item){
				echo "<option value=$item>$item</option>";
			}
		?>
		</select>
		<input type="submit" name="submit" value="Submit">
		
	</form>
</body>
</html>

<?php if ($_SERVER["REQUEST_METHOD"] =="POST") {
	echo "Name: ". $_POST['name']."<br>";
	echo "Email: ". $_POST['email']."<br>";
	echo "Gender: ". $_POST['gender']."<br>";
	echo "District: ". $_POST['district']."<br>";

} ?>
