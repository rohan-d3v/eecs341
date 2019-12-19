<?php

    include "PHP_common.php";


    // dont know what to put in the bracket []
    
	$name = strval($_POST["name"]);
	$year = strval($_POST["Year"]);

	// did not include any if statements here don't know what they do

    $sql = " select c.clubName, c.clubID, m.name from Club c, Member m where c.clubID = m.clubID and m.name = '$name' and year = $year;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
        
?>
<table id = "clubList"">
        <thead>
            <tr>
                <th style="padding-right:36px;">Club Name</th>
                <th style="padding-right:36px;">Club ID</th>
                <th style="padding-right:36px;">Student Name</th>

            </tr>
        </thead>
        <tbody>
<?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) : ?>


            <tr>
                <td class="updateSize" style="padding-right:36px;"><?php echo $row["clubName"]; ?></td>
                <td class="updateclub" style="padding-right:36px;"><?php echo $row["clubID"]; ?></td>
                <td class="updateColor" style="padding-right:36px;"><?php echo $row["name"]; ?></td>


</tr>
<?php endwhile; ?>
            <div class="footer">
                <p>Copyright Rohan, Gareth, Sam 2019</p>
            </div>
        </div>
    </body>
</html>

