
  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Document</title>
  </head>
  <body>
  	<?php
  	if (isset($_POST["submit"])) {
           $name=$_FILES['file']['name'];
           $tmp_name=$_FILES['file']['tmp_name'];
           $size =$_FILES['file']['size'];
           $type =$_FILES['file']['type'];
           $file_exten=explode('.',$name);
           $file_ext=strtolower(end($file_exten));
           $ext= array("docx","pdf");

           if (in_array($file_ext,$ext)=== true && $size <= 539648) {
               move_uploaded_file($tmp_name,'files/'.$name);
               echo '<h1>Upload Successful</h1>';
           }else {
               echo '<h1>Upload Unsuccessful</h1>';
           }
           
       }

  ?>
  </body>
  </html>
