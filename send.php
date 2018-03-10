<?php 

$title = $_POST['title'];
$description = $_POST['description'];

$to = "feliperodrigues315@gmail.com"; //destination email
$subject = "send image"; //subject of the email
$message = "the image with the title $title was sended for server"; //message

$header = "MIME-Version: 1.0\n"; //define header of the email
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .= "From: $email\n";

    mail($to, $subject, $message, $header); //send email

    require_once("connect.php"); //get connect database

    if(!is_dir('upload')){ //if not exists dir upload 
    	mkdir('upload'); //make dir upload
    }

	if(isset($_FILES['photo'])){

		$extensao = strtolower(substr($_FILES['photo']['name'], -4)); //count -4 to remove the image extension

		$nameImg = md5(time()).$extensao;
		$dir = "upload/";
	}

		move_uploaded_file($_FILES['photo']['tmp_name'], $dir.$nameImg); //move to file for dir

		$sql = "INSERT INTO images(title,description,photo) VALUES('$title','$description','$nameImg')"; //insert of the database

		if(mysqli_query($connect,$sql)){
			echo "Success";
			header('Location:show.php'); //redirect to show.php
		}else{
			echo "Error: ".mysqli_error(); //error
		}
?>