<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Концепция MVC</title>
	<link rel="stylesheet" href="#">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integerty="sha384-Gn5384xqQlaoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1>Концепция MVC</h1>
	<div>
		<div class= "article">
			<h3><?=$article['title']?></h3>
			<em>Опубликовано: <?=$article['data']?></em>
			<p><?=$article['content']?></p>
		</div>
	</div>
	<footer>
		<p>Концепция MVC<br>Copyright &copy; 2018</p>
	</footer>
</div>

</body>
</html>