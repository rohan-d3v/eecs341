<?php

	include "PHP_common.php";

	$year		= strval($_POST["yearList"]);
	$budget 	= strval($_POST["budget"]);
	$id   		= strval($_POST["id"]);




	$sql = "insert into Budget(clubID, year, amountTotal) values('$id', '$year', '$budget')";



	if (mysqli_query($conn, $sql)) {
		header('Location: addResult.php');
	} else {
    	echo "Error Adding Data";
	}

	mysqli_close($conn);

?>
