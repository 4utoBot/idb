<h2>Numeric index array</h2>
<?php

$sites = array("www.yahoo.com", "www.google.com",
"www.facebook.com");

foreach($sites as $site){ ?>
 
<a href="https://<?php echo $site ?>"><?php echo $site ?></a><br>

<?php }

?>
<h2>Assosiative Array</h2>
<?php 
$resources = array("PHP"=>"www.php.net","mySQL"=>"www.mysql.com","PHP Respources"=>"www.phpresources.com");
foreach ($resources as $key => $val) {?>

	<a href="http://<?php echo $val; ?>"><?php echo $key; ?></a><br>
	
}

 ?>