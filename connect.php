<?php

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$databasename = "spark";

	$conn = mysqli_connect($servername, $username, $password, $databasename);

	if(!$conn){
		die("Failed to connect!".mysqli_connect_error());
	}

?>