<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Show photo</title>
	<meta name="viewport" content="width = device - width, initial-scale=1">
	<meta name="author" content="Felipe Rodrigues Pacheco">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap-grid.css">
</head>
<body>

	<header>
		
		<img src="img/logo.png" alt="logotipo">

		<ul class="menu">
			<li><a href="index.php">Include</a></li>
			<li><a href="show.php">Show Photo</a></li>
		</ul>

	</header>

	<div class="container">
		
		<h1>Here are all the pictures</h1>

		<div class="row">
			
			<!--<div class="picture col-md-4">
				
				<img src="img/logo.png" alt="">

				<hr>

				<h3>Title</h3>
				<p>Description</p>

			</div>-->

			<?php 

  			require_once("connect.php"); //get connect of database

			$sql = "SELECT * FROM images ORDER BY id ASC"; //select the data incrementally 

			if($search = mysqli_query($connect,$sql)){ //verify if query is right

			while($data = mysqli_fetch_array($search,MYSQLI_ASSOC)){

				$img = "upload/".$data['photo']; //get name of image of the dir upload
				$title = $data['title'];

				echo "<div class='picture col-md-4'>"; //define data to show
				echo "<img src='".$img."' alt='image".$title."'>";
				echo "<hr>";
				echo "<h3>".$title."</h3>";
				echo "<p>".$data['description']."</p>";
				echo "</div>";

			}
		}else{
			echo "<h3 style='color:#fff;'>something is wrong</h3>"; //message error
		}
		?>

		</div>

	</div>

	<footer>
		<p><strong>Web Rocket Midia &copy;</strong> - All right reserved.</p>
	</footer>

</body>
</html>