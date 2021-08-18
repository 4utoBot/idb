<?php 
$customers=array();
$customers[]=array("jason","jason@gmail.com","53464868");
$customers[]=array("Mason","mason@gmail.com","45566486");
$customers[]=array("ijdga","dxfyh@gmail.com","32144868");

foreach ($customers as $key) {
	#vprintf("<p>Name: %s<br>E-mail: %s<br>Phone: %s</p>", $key);
	# %s is for data next part near jonno
#}

list($name,$number,$email)=$key;
echo "Name is: $name <br> Phone: $number <br> Email: $email";
}
  ?>

