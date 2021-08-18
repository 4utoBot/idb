<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php 
if(isset($_POST['submit'])){
			$path="uploads/";

			$name=$_FILES['myfile']['name'];
			"<br>";
			$tmp=$_FILES['myfile']['tmp_name'];
			if ($_FILES['myfile']['error']==0) {
				move_uploaded_file($tmp, $path.$name);

				echo "<h2> Uploaded Successfully </h2>";
			}
		}
			 ?>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile"> <br>
		<input type="submit" value="UPLOAD" name="submit">
	</form>
</body>
</html>