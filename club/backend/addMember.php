<?php

	include "common.php";

	$year   = strval($_POST["yearList"]);
	$clubID	= strval($_POST["id"]);
	$name	= strval($_POST["memName"]);
	echo $_POST["id"];
	$sql = "insert into Member(clubID, name, year) values('$clubID', '$name', '$year')";

	if (mysqli_query($conn, $sql)) {
		header('Location: addResult.php');
	} else {
    	echo "Error Adding Data";
	}

	mysqli_close($conn);

?>

