<?php

	include "PHP_common.php";


	$name		= strval($_POST["name"]);
	$year   	= strval($_POST["yearList"]);
	$president  = strval($_POST["president"]);
	$pyear 		= strval($_POST["pYearList"]);
	$viceP   	= strval($_POST["vicePresident"]);
	$vpyear 	= strval($_POST["vYearList"]);
	$treasurer  = strval($_POST["treasurer"]);
	$tyear 		= strval($_POST["tYearList"]);
	$riskM   	= strval($_POST["riskManager"]);
	$rmyear 	= strval($_POST["rYearList"]);
	$advisor   	= strval($_POST["advisor"]);
	$id 	= uniqid();
	$pid  	= uniqid('p');
	$vid  	= uniqid('v');
	$tid  	= uniqid('t');
	$rid  	= uniqid('r');



	$sql1 = "insert into execTeam(clubID, year, president, vicePresident, treasurer, riskManager, advisor) values('$id', '$year', '$pid', '$vid', '$tid', '$rid', '$advisor')";
	$sql2 = "insert into member(studentID, clubID, name, year) values('$pid', '$id', '$president', '$pyear')";
	$sql3 = "insert into member(studentID, clubID, name, year) values('$vid', '$id', '$viceP', '$vpyear')";
	$sql4 = "insert into member(studentID, clubID, name, year) values('$tid', '$id', '$treasurer', '$tyear')";
	$sql5 = "insert into member(studentID, clubID, name, year) values('$rid', '$id', '$riskM', '$rmyear')";


	if (mysqli_query($conn, $sql1) || mysqli_query($conn, $sql2) || mysqli_query($conn, $sql3) || mysqli_query($conn, $sql4) || mysqli_query($conn, $sql5)) {
		header('Location: addResult.php');
	} else {
    	echo "Error Adding Data";
	}

	mysqli_close($conn);

?>
