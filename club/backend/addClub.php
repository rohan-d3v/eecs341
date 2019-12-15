<?php
  
	include "common.php";

	$id   = uniqid();
	$name = strval($_POST["name"]);
	$type = strval($_POST["typeList"]);



	$sql1 = "insert into club(clubID, name, type, memberNumber) values('$id', '$name', '$type')"; 


	if (mysqli_query($conn, $sql1)) {
		header('Location: addResult.php');
	} else {
    	echo "Error Adding Data";
	}

	mysqli_close($conn);

?>
