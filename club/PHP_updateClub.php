<?php

	include "PHP_common.php";



	$cid   = strval($_POST["cid"]);
	$name = strval($_POST["name"]);
	$type = strval($_POST["typeList"]);

	if ($name != null) {
		$sql1 = "UPDATE `club` SET `clubName` = $name WHERE `club`.`clubID` = $cid";
	}
	if ($type != null) {
		$sql2 = "UPDATE `club` SET `clubType` = $type WHERE `club`.`clubID` = $cid";
	}








	if (mysqli_query($conn, $sql1) || mysqli_query($conn, $sql2)) {
		header('Location: updateResult.php');
	} else {
    	echo "Error Updating Data";
	}

	mysqli_close($conn);

?>

