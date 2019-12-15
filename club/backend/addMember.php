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

  $year   = strval($_POST["yearList"]);
  $clubID	= strval($_POST["idList"]);
	$name	= strval($_POST["name"]);
  $id = uniqid();

$sql = "insert into member(studentID, clubID, name, year) values('$id', '$clubID', '$name', '$year')";

	if (mysqli_query($conn, $sql)) {
		header('Location: addResult.html');
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);

?>
