<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit'])){
            $n = $_POST['name'];
            $e = $_POST['email'];
            $m = $_POST['message'];
            $m = strip_tags($m);
            $m = htmlentities($m, ENT_QUOTES);
            
            $errors = array();

            if($n==NULL){
                $errors[] = "You have to enter a name first<br>";
            } 

            if(empty($e)){
                $errors[] = "You have to enter an email<br>";
            } else {
                    if(!filter_var($e, FILTER_VALIDATE_EMAIL)){
                    $errors[] = "Your Email is invalid<br>";
                } 
            }

            if($m==""){
                $errors[] = "You have to enter message<br>";
            } 

            if(count($errors)>0){
                // all errors display
                echo "<ul>";
                foreach($errors as $error){
                    echo "<li><b>$error</b></li>" ;
                }
                echo "</ul>";
            } else {
                // All info will be displayed
            }               
        }
     ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name"> <br>
        <input type="text" name="email"><br>
        <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" value="SEND" name="submit">
    </form>
</body>

</html>