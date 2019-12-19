<?php

    include "PHP_common.php";


    // dont know what to put in the bracket []
    
	$name = strval($_POST["searchOption"]);
	$year = strval($_POST["searchOption"]);

	// did not include any if statements here don't know what they do

    $sql = "select clubName from Club, Member where Club.clubID = Member.clubID and name = $name and year = $year";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
        
?>

        <?php include('navbar.php');?>

        <h1>SEARCH MEMBER RESULT</h1><br>
        </div>

        <table id = "clubList"">
            <thead>
                <tr>
                <th style="padding-right:36px;">Club ID</th>
                <th style="padding-right:36px;">Club Name</th>
                </tr>
            </thead>

            <tbody>

                <?php while($row = mysqli_fetch_assoc($result)) : ?>

                <tr>
                <td class="updateSize" style="padding-right:36px;"><?php echo $row["clubID"]; ?></td>
                <td class="updateclub" style="padding-right:36px;"><?php echo $row["clubName"]; ?></td>
                </tr>

                <?php endwhile; ?>

            </tbody>
        </table>
    </body>
</html>
