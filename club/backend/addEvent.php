<?php

	include "common.php";

	$name	= strval($_POST["name"]);
	$date 	= strval($_POST["date"]);
	$food 	= strval($_POST["food"]);
	$cid   	= strval($_POST["cid"]);
	$bid 	= strval($_POST["bid"]);
	$id 	= uniqid();


	$sql = "insert into event(eventID, name, date, food, buildingID, clubID) values('$id', '$name', '$date', '$food', '$bid', '$cid')";


	include "commonadd.php";

?>
