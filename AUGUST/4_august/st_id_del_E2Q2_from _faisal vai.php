<?php 

$mysqli = @new mysqli("localhost", "root", "", "isdb_bisew");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $sql= "SELECT id,name FROM students"; 
      $res = $mysqli->query($sql);
      if (isset($_POST['submit'])) {
       extract($_POST);
       $mysql = "DELETE FROM students WHERE id= '$id'";
       $mysqli->query($mysql);
       echo "Delete successful";    
      }

      
    
    ?>




    <form action="" method="post">
        <select name="id" id="">
            <?php 
          while($data = $res->fetch_assoc()) {
            $id= $data['id']; 
            $name= $data['name'];

          echo "<option value='$id'>$name</option>";
          }
            ?>
            
        </select>
        <input type="submit" name="submit" value="DELETE">
    </form>
</body>
</html>