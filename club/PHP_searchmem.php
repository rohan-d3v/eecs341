<?php

    include "PHP_common.php";

    $name   = strval($_POST["searchOption"]);
    $type = strval($_POST["typeList"]);

    $whereVal = " where ";
    $nameVal  = "name='$name' ";
    $typeVal  = "AND name='$type' ";

    if($name=="blank"){$nameVal = ""; $typeVal = "type='$type' ";};
    if($type=="blank"){$typeVal = "";};

    if($name=="blank" && $type=="blank")
    {$whereVal = "";};

    $sql = "select * from $name";   // this searches with year, clubid, name, and type if they are inputted

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
                <td class="updateclub" style="padding-right:36px;"><?php echo $row["eventName"]; ?></td>
                </tr>

                <?php endwhile; ?>

            </tbody>
        </table>
    </body>
</html>
