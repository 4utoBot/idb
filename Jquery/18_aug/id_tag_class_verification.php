<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<script>
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("p:first").hide();
			});
			$("#btn2").click(function(){
				$("p.second").hide();
			});
			$("#btn3").click(function(){
				$("p#third").hide();
			});

		});
     
	</script>
	<button id="btn1">Button1</button>
	<button id="btn2">Button</button>
	<button id="btn3">Button3</button>

	<p>1st paragraph without class or id</p>
	<p class="second">2nd paragraph with class</p>
	<p id="third">3rd paragraph with id</p>
</body>
</html>