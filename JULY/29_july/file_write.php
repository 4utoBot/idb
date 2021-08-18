<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$myfile =fopen("myfile.txt","w") or die ("unable to open file");

		$mytext="Arif : arif@gmail.com \n";
		fwrite($myfile, $mytext);

		$mytext="Arif : arif@gmail.com \n";
		fwrite($myfile, $mytext);

		$mytext="Arif : arif@gmail.com \n";
		fwrite($myfile, $mytext);

		$myfiles=fopen("myfile.txt", "r");
		$data= fread($myfiles,filesize("myfile.txt"));

		echo $data;


	 ?>
</body>
</html>