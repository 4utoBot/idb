<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>php output function: print,echo,printf,sprintf</h1>
	<?php 
	    //example of print
        print "<p>Today is a rainy Day</p>";
        //example of echo
        echo "Today is a rainy day <br>";

        $season="Rainy";
        echo "Now the <b>$season</b> season is going on <br>";

        print("We love $season season");

        $city="Postogola";
        $man="Kowshar";

        echo $city,$man;

        echo "<h1>The man " . $man . " came from $city city</h1> <br>";

        printf("<p>The man %s came from %s city</h1> <br>", $man, $city);


        printf("$%.3f",43.2);

$cost=sprintf("$%.2f",43.2);
echo "<br>";
print $cost;

	?>
</body>
</html>