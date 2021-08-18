<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	//print_r($_POST);

	if ($_SERVER['REQUEST_METHOD']=='POST')//error thekailam {
		
	
	if ($_POST['marks']>=80) {
		echo "Congratulations";
	 	# code...
	 }else{
	 	echo "Sorry, You have been failed :(";
	 }
	 
	  ?>
	 <form action="" method="post">
	 	<input type="text" name="marks" placeholder="Enter Obtain Marks"> <br>
	 	<input type="submit" value="CHECK">
	 </form>
</body>
</html>