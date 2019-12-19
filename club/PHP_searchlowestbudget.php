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


  $name   = strval($_POST["Event"]);
  $type = strval($_POST["typeList"]);

        $whereVal = " where ";
        $nameVal  = "name='$name' ";
        $typeVal  = "AND name='$type' ";

        if($name=="blank"){$nameVal = ""; $typeVal = "type='$type' ";};
        if($type=="blank"){$typeVal = "";};

        if($name=="blank" && $type=="blank")
        {$whereVal = "";};

        $sql = " Select c.clubName, b0.year, b0.amountTotal From Club c, Budget b0 Where b0.amountTotal < (Select b1.amountTotal From Budget b1 Where b1.clubID <> b0.clubID limit 1) And year = 2019 order by amountTotal desc limit 1;"
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
?>
<table id = "clubList"">
        <thead>
            <tr>
                <th style="padding-right:36px;">Club Name</th>
                <th style="padding-right:36px;">Year</th>
                <th style="padding-right:36px;">Total Amount</th>

            </tr>
        </thead>
        <tbody>
<?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) : ?>


            <tr>
                <td class="updateSize" style="padding-right:36px;"><?php echo $row["clubName"]; ?></td>
                <td class="updateclub" style="padding-right:36px;"><?php echo $row["year"]; ?></td>
                <td class="updateColor" style="padding-right:36px;"><?php echo $row["amountTotal"]; ?></td>


</tr>
<?php endwhile; ?>
            <div class="footer">
                <p>Copyright Rohan, Gareth, Sam 2019</p>
            </div>
        </div>
    </body>
</html>
