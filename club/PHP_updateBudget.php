<?php

	include "PHP_common.php";


	if (mysqli_query($conn, $sql)) {
		header('Location: updateResult.php');
	} else {
    	echo "Error Updating Data";
	}

	mysqli_close($conn);

?>

