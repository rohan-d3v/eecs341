
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

 $sql = " select distinct m.name from Member m where m.year = 2018 and not exists (select c.clubID from Club c) not in (select m.clubID from Member m1 where m1.name = m.name);";        
$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
?>
<table id = "clubList"">
        <thead>
            <tr>
                <th style="padding-right:36px;">Student Name</th>

            </tr>
        </thead>
        <tbody>
<?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) : ?>


            <tr>
                <td class="updateSize" style="padding-right:36px;"><?php echo $row["name"]; ?></td>


</tr>
<?php endwhile; ?>
            <div class="footer">
                <p>Copyright Rohan, Gareth, Sam 2019</p>
            </div>
        </div>
    </body>
</html>

