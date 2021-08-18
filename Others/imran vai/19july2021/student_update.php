<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<h2>Students Update Form</h2>
<?php  
		require_once ("db_config.php");
		if($_SERVER['REQUEST_METHOD']=='POST'){
		$edu="";
		extract($_POST);
		foreach($education as $educations){
			$edu .= $educations .",";
		}
		 $sql = "UPDATE students SET name='$name', gender='$gender',district='$district',profile='$profile',education='$edu' WHERE id='$id'";
		 $result = $mysqli->query($sql);
		 $data = $mysqli->affected_rows;
		 if($data==TRUE){
			echo "<h4 style='color:green'>Students updated successfully</h4><br>";
		}else{
			echo "<h4 style='color:red'>Student not Update</h4>";
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
		<input type="radio" name="gender" value="Female">Female
		<br>
		<span>District :</span>
		<select name="district" id="">
			<option value="">Select One</option>
			<option value="Barishal">Barishal</option>
			<option value="Dhaka">Dhaka</option>
			<option value="Rajshahi">Rajshahi</option>
			<option value="Noakhali">Noakhali</option>
		</select> <br>
		<span>Profile :</span>
		<textarea name="profile" id="" cols="30" 
			rows="4" placeholder="Write your bio data..."></textarea> <br>
		<span>Education :</span>
		<input type="checkbox" name="education[]" value="SSC">SSC
		<input type="checkbox" name="education[]" value="HSC">HSC
		<input type="checkbox" name="education[]" value="BA">BA
		<input type="checkbox" name="education[]" value="MA">MA 
		<br>
	
		<input type="submit" name="update" value="UPDATE">
		
	</form>
	<br><br>
	<a href="student_list.php" target="_blank">Students List</a>
	
</body>
</html>