<?php 
echo "<pre>";
//print_r($_SERVER); 

//print_r($_SERVER['HTTP_HOST']);
//print_r($_SERVER['DOCUMENT_ROOT']);
//print_r($_GET);
echo $_GET['city'];


?>

<a href="super_global.php?name='Imran'&age='20'">Click Here</a>

<form action="" method="get">
	<input type="text" name="country" placeholder="Country"> <br>
	<input type="text" name="city" placeholder="City"> <br>
	<input type="submit" value="SUBMIT">
</form>