<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form validation</title>
    
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        extract($_POST);

        //Password validation
        if ((strlen($usern) >= 4 && strlen($usern) <= 8)) {
            echo "<h3 class='valid'>$usern validated</h3>";
        } else {
            echo "<h3 class='invalid'>Put minimun 4 and maximu 8 character long username</h3>";
        }
        //Email validation
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
            echo "<h3 class='valid'>$email valided</h3>";
        } else {

            echo "<h3 class='invalid'>You have put an invalid  Email address</h3>";
        }
    }
    ?>
    <form method="post" action="">
        <!-- <p><input type="text" name="name" placeholder="Put your name"></p> -->
        <p><input type="text" name="usern" placeholder="user name"></p>
        <p><input type="text" name="email" placeholder="Put email address"></p>

        <input type="submit" name="submit" value="LogIn">
    </form>
</body>

</html>