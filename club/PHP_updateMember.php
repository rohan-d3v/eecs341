<?php

	include "PHP_common.php";

        include "PHP_common.php";



        $cid   = strval($_POST["id"]);
        $name = strval($_POST["memName"]);
        $type = strval($_POST["yearList"]);

        if ($name != null) {
                $sql1 = "UPDATE Member SET name = '$name' WHERE clubID = '$cid'";
        }
        if ($type != null) {
                $sql2 = "UPDATE Member SET year = '$type' WHERE clubID = '$cid'";
        }


	if (mysqli_query($conn, $sql)) {
		header('Location: updateResult.php');
	} else {
    	echo "Error Updating Data";
	}

	mysqli_close($conn);

?>

