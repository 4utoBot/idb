<?php 
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "wdpf47");

$mysqli= @new mysqli(HOST, USER,PASS,DB);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search From Database</title>
</head>
<body>
<p>
Search the bookmarks database:<br />
<form action="" method="post">
Last name:<br>
<input type="text" name="name" size="20" maxlength="40" value=""><br>
<input type="submit" name="submit" value="Search!">
</form>
</p>

<?php

if (isset($_POST['name'])) {

$stmt = $mysqli->prepare("SELECT name, url FROM bookmarks WHERE description like ?");
$x= $_POST['name'];

$stmt->bind_param('s',$x);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
$stmt->bind_result($name, $url);
while ($stmt->fetch())
printf("%s, (%s)<br />", $name, $url);
} else {
echo "No results found.";
}
}
?>
</body>
</html>
