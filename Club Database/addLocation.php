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
  $room = strval($_POST["room"]);
  $capacity = strval($_POST["capacity"]);
  $id = uniqid();



	$sql = "insert into building(buildingID, buildingName, roomNumber, maxCapacity) values('$id', '$name', '$room', '$capacity')";




	if (mysqli_query($conn, $sql)) {
		header('Location: addResult.html');
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);

?>
