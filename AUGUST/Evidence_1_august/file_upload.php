<?php  
if(isset($_FILES['file'])){
   $errors= array();
   $file_name= $_FILES['file']['name'];
   $file_size= $_FILES['file']['size'];
   $file_tmp= $_FILES['file']['tmp_name'];
   $file_type= $_FILES['file']['type'];

   $arr= explode(".", $file_name);
   $file_ext= strtolower(end($arr));

   $extentions= array("jpg","jpeg","docx","pdf","png","doc");

   if(in_array($file_ext, $extentions)==false){
      $errors[]= "Your file type is not allowed";
   }

   if($file_size>400000){
      $errors[]="Your file should be bellow 400kb";
   }

   if(empty($errors)==true){
      move_uploaded_file($file_tmp, 'uploads/'.$file_name);
      echo "success";
   } else {
      echo "<ul>";
      foreach($errors as $err){
         echo "<li>$err</li>";
      }
      echo "</ul>";
   }
}




?>



<html>
<body>
         <form action=" " method="post" enctype="multipart/form-data">
            <input type="file" name="file"><br><br>
            <input type="submit" name="submit" value="UPOLOAD">
         </form>
   </body>   
</html>