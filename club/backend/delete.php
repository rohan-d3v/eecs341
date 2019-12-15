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

$query = strval($_POST["id"]);

        $id   = strval($_POST["idList"]);
        $type   = strval($_POST["typeList"]);
        $name	= strval($_POST["name"]);
        $president  = strval($_POST["president"]);
        $vicePresident   = strval($_POST["vicePresident"]);
        $treasurer  = strval($_POST["treasurer"]);
        $riskManager   = strval($_POST["riskManager"]);
        $advisor   = strval($_POST["advisor"]);


        $sql = "delete from club where " . "$query" . " LIMIT 1";

        if (mysqli_query($conn, $sql)) {
		header('Location: home.html');
        } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);

?>
