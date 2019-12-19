<?php

	$servername = 'localhost:3306';
	$username = 'group15';
	$password = 'Group_15';
	$dbname = 'clubs';

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	    echo("Connection failed: " . mysqli_connect_error());
	}

?>

