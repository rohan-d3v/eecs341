<?php

	include "common.php";

	$type   	= strval($_POST["typeList"]);
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
	$pid 	= uniqid(p);
	$vid 	= uniqid(v);
	$tid 	= uniqid(t);
	$rid 	= uniqid(r);


	$sql = "insert into club(clubID, name, type, memberNumber) values('$id', '$name', '$type')";      //don't know how to do count
	$sql = "insert into execTeam(clubID, year, president, viceP, treasurer, riskM, advisor) values('$id', '$year', '$pid', '$vid', '$tid', '$rid', '$advisor')";
	$sql = "insert into member(studentID, clubID, name, year) values('$pid', '$id', '$president', '$pyear')";
	$sql = "insert into member(studentID, clubID, name, year) values('$vid', '$id', '$viceP', '$vpyear')";
	$sql = "insert into member(studentID, clubID, name, year) values('$tid', '$id', '$treasurer', '$tyear')";
	$sql = "insert into member(studentID, clubID, name, year) values('$rid', '$id', '$riskM', '$rmyear')";


	include "commonadd.php";

?>
