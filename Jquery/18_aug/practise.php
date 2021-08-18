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
			$("#b1").click(function(){
				$("#img").hide();
			});
			$("#b2").click(function(){
				$("#img").show();
			});
			$("#b3").click(function(){
				$("#img").toggle();
			});
		});
	</script>
	<button id="b1">Hide</button>
	<button id="b2">Show</button>
	<button id="b3">Toggle</button>
	<div id="img">
	<img src="jq.jpg" alt="">
	</div>
</body>
</html>