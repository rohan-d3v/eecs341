<?php

	include "PHP_common.php";

	$clubID   	= strval($_POST["id"]);
	$name		= strval($_POST["name"]);
	$year   	= strval($_POST["yearList"]);
	$president  = strval($_POST["president"]);
	$viceP   	= strval($_POST["vicePresident"]);
	$treasurer  = strval($_POST["treasurer"]);
	$riskM   	= strval($_POST["riskManager"]);
	$advisor   	= strval($_POST["advisor"]);




	$sql1 = "insert into ExecTeam(clubID, year, president, viceP, treasurer, riskManager, advisor) values('$id', '$year', '$president', '$viceP', '$treasurer', '$riskM', '$advisor')";

	if (mysqli_query($conn, $sql1)) {
		header('Location: addResult.php');
	} else {
    	echo "Error Adding Data";
	}

	mysqli_close($conn);

?>

