<?php 
$host="localhost";
$user="root";
$pass="";
$db="classicmodels";

$conn=@mysqli_connect($host, $user, $pass) or die("Failed to connect with MySQL server");

mysqli_select_db($conn, $db) or die("Failed to select database");

$sql=mysqli_query($conn, "SELECT*FROM employees");

//print_r($sql);

while($data=mysqli_fetch_array($sql)){
	echo $data['lastName']."<br>";
}
//print_r($data);

 ?>