<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Upload for system</title>
	<meta name="viewport" content="width = device - width, initial-scale=1">
	<meta name="author" content="Felipe Rodrigues Pacheco">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		
		<img src="img/logo.png" alt="logotipo">

		<ul class="menu">
			<li><a href="index.php">Include</a></li>
			<li><a href="show.php">Show Photo</a></li>
		</ul>

	</header>

	<div class="container clearfix">
		
		<h1>Do upload a photo for your account</h1>

		<form action="send.php" method="post" enctype="multipart/form-data">
			
			<label for="title">Title</label><br>
			<input type="text" name="title" id="title" maxlength="30"><br>
			<label for="description">Description</label><br>
			<textarea name="description" id="description" cols="40" rows="7" maxlength="255"></textarea><br>
			<input type="file" name="photo" id="photo"><br>
			<button type="submit">Send</button>

		</form>

	</div>

	<footer>
		<p><strong>Web Rocket Midia &copy;</strong> - All right reserved.</p>
	</footer>

</body>
</html>