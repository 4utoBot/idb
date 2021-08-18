<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Entry Form</title>
</head>
<body>
<h2>Student Information</h2>
<?php 
	require_once ("db_config.php"); 
	if(isset($_POST['submit'])){
		extract($_POST);
		$edu = "";

			foreach($education as $educations){
				//echo $educations . "<br>";
				$edu .= $educations . ',';			
		}	

		$sql = "INSERT INTO students VALUES('$id', '$name', '$gender','$district','$profile','$edu')";
		$result = $mysqli->query($sql);
		$data = $mysqli->affected_rows;
		if($data){
			echo "Student inserted successfully<br>";
		
		}
	}

?>
	

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<span>ID :</span>
		<input type="text" name="id" placeholder="Enter ID"><br>
		<span>Name :</span>
		<input type="text" name="name" placeholder="Enter student name"><br>
		<span>Gender :</span>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female <br>
		<span>District :</span>
		<select name="district" id="">
			<option value="">Select One</option>
			<option value="Barishal">Barishal</option>
			<option value="Dhaka">Dhaka</option>
			<option value="Rajshahi">Rajshahi</option>
			<option value="Noakhali">Noakhali</option>
		</select> <br>
		<span>Profile :</span>
		<textarea name="profile" id="" cols="30" rows="4"></textarea> <br>
		<span>Education :</span>
		<input type="checkbox" name="education[]" value="SSC">SSC
		<input type="checkbox" name="education[]" value="HSC">HSC
		<input type="checkbox" name="education[]" value="BA">BA
		<input type="checkbox" name="education[]" value="MA">MA 
		<br>

		<input type="submit" name="submit" value="SEND">
		
	</form>
	<br><br>
	<a href="student_list.php" target="_blank">Students List</a>
	
</body>
</html>