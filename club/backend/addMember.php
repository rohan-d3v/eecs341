<?php

	include "common.php";

	$year   = strval($_POST["yearList"]);
	$clubID	= strval($_POST["idList"]);
	$name	= strval($_POST["name"]);
	$id 	= uniqid();

	$sql = "insert into member(studentID, clubID, name, year) values('$id', '$clubID', '$name', '$year')";

	include "commonadd.php";

?>
