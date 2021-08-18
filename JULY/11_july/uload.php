<?php
   if(isset($_FILES['myfile'])){
      $errors= array();
      $file_name = $_FILES['myfile']['name'];
      $file_size =$_FILES['myfile']['size'];
      $file_tmp =$_FILES['myfile']['tmp_name'];
      $file_type=$_FILES['myfile']['type'];
      
      $arr=explode('.',$file_name);
      $file_ext=strtolower(end($arr));


      
      $extensions= array("jpeg","jpg","png","docx");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG/PNG/DOCX file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"docs/".$file_name);
         echo "Success";
      }else{
         echo "<ul>";
         foreach($errors as $err){
            echo "<li>$err</li>";
         }
         echo "</ul>";
         #print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="" method="post" enctype="multipart/form-data">
         <input type="file" name="myfile" />
         <input type="submit"/>
      </form>
      
   </body>
</html>