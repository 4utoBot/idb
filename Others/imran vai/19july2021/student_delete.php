<?php 
require_once ("db_config.php");
$id = $_REQUEST['id'];

$sql = "DELETE FROM students WHERE id='$id'";
$mysqli->query($sql);

echo $mysqli->affected_rows . " Student list has been deleted";
// header('location:student_list.php');

?>
