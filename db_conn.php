<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bank_db";

	$conn = mysqli_connect('localhost','root','','bank_db');

	if(!$conn){
		die("Could not connect to the database - Error:  ".mysqli_connect_error());
	}

?>