<?php 
 echo "<pre>";
 print_r($_FILES);
 $_FILES['myfile']['type'];

 ?>

 <form action="" enctype="multipart/form-data" method="post">
 	<input type="file" name="myfile">
 	<input type="submit" name="submit" value="UPLOAD">
 </form>