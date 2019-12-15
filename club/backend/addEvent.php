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

	$name	= strval($_POST["name"]);
  $date = strval($_POST["date"]);
  $food = strval($_POST["food"]);
  $cid   = strval($_POST["cid"]);
  $bid = strval($_POST["bid"]);
  $id = uniqid();



	$sql = "insert into event(eventID, name, date, food, buildingID, clubID) values('$id', '$name', '$date', '$food', '$bid', '$cid')";



	if (mysqli_query($conn, $sql)) {
		header('Location: addResult.html');
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);

?>
