<?php

	include "PHP_common.php";



	$cid   = strval($_POST["cid"]);
	$name = strval($_POST["name"]);
	$type = strval($_POST["typeList"]);
	$del = strval($_POST["delete"]);
	if ($name != null) {
		$sql1 = "UPDATE Club SET clubName = '$name' WHERE clubID = '$cid'";
	}
	if ($type != null) {
		$sql2 = "UPDATE Club SET clubType = '$type' WHERE clubID = '$cid'";
	}
	if (isset($_POST["delete"])){
        $sql3 = "DELETE from Club where clubID = '$cid'";
	 if (mysqli_query($conn, $sql3)) {
                header('Location: deleteResult.php');
        } else {
        echo "Error Updating Data";
        }
        }


	if (mysqli_query($conn, $sql1) || mysqli_query($conn, $sql2)) {
		header('Location: updateResult.php');
	} else {
    	echo "Error Updating Data";
	}

	mysqli_close($conn);

?>

