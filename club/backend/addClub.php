<?php
$servername = 'localhost:3306';
$username = 'group15';
$password = 'Group_15';
$dbname = 'clubs';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  $type   = strval($_POST["typeList"]);
	$name	= strval($_POST["name"]);
  $year   = strval($_POST["yearList"]);
  $president  = strval($_POST["president"]);
  $pyear = strval($_POST["pYearList"]);
  $vicePresident   = strval($_POST["vicePresident"]);
  $vpyear = strval($_POST["vYearList"]);
  $treasurer  = strval($_POST["treasurer"]);
  $tyear = strval($_POST["tYearList"]);
  $riskManager   = strval($_POST["riskManager"]);
  $rmyear = strval($_POST["rYearList"]);
  $advisor   = strval($_POST["advisor"]);
  $id = uniqid();
  $pid = uniqid('p');
  $vid = uniqid('v');
  $tid = uniqid('t');
  $rid = uniqid('r');


	$sql1 = "insert into club(clubID, name, type, memberNumber) values('$id', '$name', '$type')";      //don't know how to do count
  $sql2 = "insert into execTeam(clubID, year, president, vicePresident, treasurer, riskManager, advisor) values('$id', '$year', '$pid', '$vid', '$tid', '$rid', '$advisor')";
	$sql3 = "insert into member(studentID, clubID, name, year) values('$pid', '$id', '$president', '$pyear')";
  $sql4 = "insert into member(studentID, clubID, name, year) values('$vid', '$id', '$vicePresident', '$vpyear')";
  $sql5 = "insert into member(studentID, clubID, name, year) values('$tid', '$id', '$treasurer', '$tyear')";
  $sql6 = "insert into member(studentID, clubID, name, year) values('$rid', '$id', '$riskManager', '$rmyear')";



	if (mysqli_query($conn, $sql1)) {
		#header('Location: addResult.html');
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

  if (mysqli_query($conn, $sql2)) {
    #header('Location: addResult.html');
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  if (mysqli_query($conn, $sql3)) {
    #header('Location: addResult.html');
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  if (mysqli_query($conn, $sql4)) {
		#header('Location: addResult.html');
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

  if (mysqli_query($conn, $sql5)) {
    #header('Location: addResult.html');
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  if (mysqli_query($conn, $sql6)) {
    header('Location: addResult.html');
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


mysqli_close($conn);

?>
