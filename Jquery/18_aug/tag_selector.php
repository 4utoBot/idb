<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script src="js/jquery.min.js"></script> -->

	
</head>
<body>
	<script>
		$(document).ready(function(){
			var pars = $("p");
			for(i=0; i<pars.length; i++){
				alert("Found paragraph: " + pars[i].innerHTML);
			}
		})
	</script>
	
	<div>
		<p class="myclass">This is paragraph</p>
		<p id="myid">This is second paragraph</p>
		<p>This is third paragraph</p>
	</div>
</body>
</html>