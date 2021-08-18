<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
		p{display: none;}
	</style>
</head>
<body>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("p.intro").hide();
			});
		});
	</script>
	<button>Click here</button>
	<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum placeat dolores veritatis quis exercitationem nisi? Tempore deleniti animi minima, at, debitis accusamus nisi odio! Obcaecati quas nesciunt, error fugit asperiores.</p>
	<p class="intro">Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis tenetur libero saepe quidem adipisci ipsam commodi magnam, labore, eveniet quaerat iusto culpa harum possimus rerum sed in reprehenderit assumenda?</p>
</body>
</html>