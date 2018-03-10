<?php 

	$hostname = "localhost"; //name of host 
	$user = "root"; //name of user
	$password = ""; // your password
	$database = "webrocket"; //name database

	$connect = mysqli_connect($hostname,$user,$password,$database); //connect of database

	if(!$connect){
		echo "Error connecting to database"; //if error on connect to database show message
	}

 ?>