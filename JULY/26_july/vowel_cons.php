<?php
	$myltr = $_POST['myltr'];

	$ltrlower = strtolower($myltr);


	if ( $ltrlower=integer) {
		
		
	}

	if($ltrlower == 'a' || $ltrlower == 'e' || $ltrlower == 'i' || $ltrlower == 'o' || $ltrlower == 'u') {

			echo " <h2> $myltr is Vowel </h2>";

	} else {
			echo "<h2> $myltr is Consonent </h2>";
	}

?>


<form method="post" action="">
    <p><input type="text" name="myltr" placeholder="My Letter"></p>
    <input type="submit" name="submit" value="CHECK">
     
</form>