<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		extract($_POST);
		echo $name . "<br>";
		echo $email . "<br>";
		echo "<hr>";

		foreach($languages as $language){
			echo $language. "<br>";
		}
		if(isset($databases)){
			foreach($databases as $database){
				echo $database ."<br>";
			}
			#print_r($databases);
		}

		// code...
	}


	 ?>


	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<label for="">Your Name: </label> <input type="text" name="name"> <br><br>
		<label for="">Email Address: </label><input type="email" name="email"><br> <br>
		<label for="">Favourite Lang</label> 
		<select name="languages[]" multiple="multiple">
 <option value="csharp">C#</option>
 <option value="javascript">JavaScript</option>
 <option value="perl">Perl</option>
 <option value="php" selected>PHP</option>
</select>
<br>

What's your favorite programming language?<br> (check all that 
apply):<br>
 <input type="checkbox" name="languages[]" value="csharp">C#<br>
 <input type="checkbox" name="languages[]" value="javascript">JavaScript
<br>
 <input type="checkbox" name="languages[]" value="perl">Perl<br>
 <input type="checkbox" name="languages[]" value="php">PHP<br>


<input type="submit" value="SUBMIT">
	</form>
</body>
</html>