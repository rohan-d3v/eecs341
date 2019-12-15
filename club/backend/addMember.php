<?php

	include "common.php";

	$year   = strval($_POST["yearList"]);
	$clubID	= strval($_POST["idList"]);
	$name	= strval($_POST["name"]);
	$id 	= uniqid();

	$sql = "insert into member(studentID, clubID, name, year) values('$id', '$clubID', '$name', '$year')";

	if (mysqli_query($conn, $sql1)) {
		header('Location: addResult.php');
	} else {
    	echo "Error Adding Data";
	}

	mysqli_close($conn);

?>
