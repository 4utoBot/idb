<?php 

$mysqli = @new mysqli("localhost", "root", "", "evidence_17_aug");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>List of All Manufacturing Company</h3>
    <?php
      $sql= "SELECT id,name FROM manufacturer"; 
      $res = $mysqli->query($sql);
      if (isset($_POST['submit'])) {
       extract($_POST);
       $mysql = "DELETE FROM manufacturer WHERE id= '$id'";
       $mysqli->query($mysql);
       echo "Record's Has Been Deleted Successfully!";    
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