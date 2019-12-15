<?php

	include "common.php";

	$year		= strval($_POST["yearList"]);
	$semester 	= strval($_POST["semesterList"]);
	$budget 	= strval($_POST["budget"]);
	$id   		= strval($_POST["id"]);




	$sql = "insert into event(clubID, year, semester, amountLeft, amountTotal) values('$id', '$year', '$semester', '$budget', '$budget')";



	include "commonadd.php";

?>
