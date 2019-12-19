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

	$sql = "select * from $name";   // this searches with year, clubid, name, and type if they are inputted
	echo $sql;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
?>
<table id = "clubList"">
        <thead>
            <tr>
                <th style="padding-right:36px;">Event Date</th>
                <th style="padding-right:36px;">Club ID</th>
                <th style="padding-right:36px;">Name</th>
                <th style="padding-right:36px;">Location</th>

            </tr>
        </thead>
        <tbody>
<?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) : ?>


            <tr>
		<td class="updateSize" style="padding-right:36px;"><?php echo $row["eventDate"]; ?></td>
                <td class="updateSize" style="padding-right:36px;"><?php echo $row["clubID"]; ?></td>
                <td class="updateclub" style="padding-right:36px;"><?php echo $row["eventName"]; ?></td>
                <td class="updateColor" style="padding-right:36px;"><?php echo $row["location"]; ?></td>


</tr>
<?php endwhile; ?>
            <div class="footer">
                <p>Copyright Rohan, Gareth, Sam 2019</p>
            </div>
        </div>
    </body>
</html>
