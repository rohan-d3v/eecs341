<?php

	if (mysqli_query($conn, $sql)) {
		header('Location: addResult.php');
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?>
