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

	$year	= strval($_POST["yearList"]);
  $semester = strval($_POST["semesterList"]);
  $budget = strval($_POST["budget"]);
  $id   = strval($_POST["id"]);




	$sql = "insert into event(clubID, year, semester, amountLeft, amountTotal) values('$id', '$year', '$semester', '$budget', '$budget')";



	if (mysqli_query($conn, $sql)) {
		header('Location: addResult.html');
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);

?>
