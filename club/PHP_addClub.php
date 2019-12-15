<?php
	include "PHP_common.php";


	$id   = uniqid();
	$name = strval($_POST["name"]);
	$type = strval($_POST["typeList"]);

	echo $_POST["name"];
	echo $_POST["typeList"];
	$sql1 = "insert into club(clubID, clubName, clubType) values('$id', '$name', '$type')"; 


	if (mysqli_query($conn, $sql1)) {
		header('Location: addResult.php');
	} else {
    	echo "Error Adding Data";
	}

	mysqli_close($conn);

?>
