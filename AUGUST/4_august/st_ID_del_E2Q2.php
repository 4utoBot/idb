<?php 
$mysqli=@new mysqli("localhost","root","","idb_bisew"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$sql="SELECT * FROM id , name FROM student";
	$res=$mysqli->query($sql);

	if (isset($_POST['submit'])){
		extract($_POST);
		$mysql="DELETE FROM student WHERE id='$id' ";
		$results = $mysqli->query($mysql);
		//$result->fetch_assoc();

	}
 ?>
	<form action="" method="post">
		<select name="" id="">
			<?php 
			//while($data=$res->fetch_assoc()){
			//	$id = $data['id'];
				//$name= $data['name'];
				// echo "<option value='$id'>'$name'</option>";
			//}
			 
 			foreach($results as $result){ ?>
 			 <option value= "<?php echo $result['id']; ?> "> 
 			 	<?php $result['name'] ?>

 			 </option>
    <?php  }	

			 ?>
			
		</select>
		<input type="submit" name="submit" value="DELET">
	</form>
</body>
</html>