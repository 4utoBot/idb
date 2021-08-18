<?php 
$x="D:";
echo "Disc Free Space= ". $free =round(disk_free_space($x)/1024/1024/1024, 2);
echo "<br>";
echo "Disc Total Space= ".$total =round(disk_total_space($x)/1024/1024/1024, 2);
echo "<br>";

echo "Disc Used Space= ". $used=$total-$free;;
 ?>