<?php
	include "PHP_common.php";


	$name = strval($_POST["name"]);
	$type = strval($_POST["typeList"]);

	echo $_POST["name"];
	echo $_POST["typeList"];
	$sql1 = "insert into Club(clubName, clubType) values('$name', '$type')"; 


	if (mysqli_query($conn, $sql1)) {
		header('Location: addResult.php');
	} else {
    	echo "Error Adding Data";
	}

	mysqli_close($conn);

?>
