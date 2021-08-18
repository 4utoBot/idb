<?php 
$x= array("Karim"=>"55","Rahim"=>"60","Mofiz"=>"80","Abul"=>"99");

echo "<table border='1'>";
echo "<tr><th>Student Name</th><th>Mark</th></tr>";

foreach ($x as $name => $mark) {
echo "<tr><td>$name</td><td>$mark</td></tr>";
}
echo "</table>";
 ?>