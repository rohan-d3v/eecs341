<?php

include "common.php";

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
