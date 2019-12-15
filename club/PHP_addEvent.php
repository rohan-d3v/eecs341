<?php

	include "PHP_common.php";

	$name	= strval($_POST["eveName"]);
	$date 	= strval($_POST["date"]);
	$food 	= strval($_POST["food"]);
	$room   = strval($_POST["room"]);
	$clubID	= strval($_POST["id"]);

	if (isset($_POST["food"])){
                $food = 1;
        }

	if (!isset($_POST["food"])){
		$food = 0;
	}
	echo $date;
	$sql = "insert into Event(eventName, eventDate, food, location, clubID) values('$name', '$date', '$food', '$room', '$clubID')";


	if (mysqli_query($conn, $sql)) {
		header('Location: addResult.php');
	} else {
    	echo "Error Adding Data";
	}

	mysqli_close($conn);

?>
