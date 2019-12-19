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


  $name   = strval($_POST["name"]);
  $type = strval($_POST["typeList"]);

	$whereVal = " where ";
	$nameVal  = "name='$name' ";
  $typeVal  = "AND clubName='$type' ";

	if($name==""){$nameVal = ""; $typeVal = " Clubtype='$type' ";};
  if($type==""){$typeVal = "";};

	if($name=="" && $type=="")
	{$whereVal = "";};

	$sql = "select * from club " .$whereVal .$nameVal .$typeVal;   // this searches with year, clubid, name, and type if they are inputted

  echo $sql;

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
?>
<table id = "clubList"">
        <thead>
            <tr>
                <th style="padding-right:36px;">Club ID</th>
                <th style="padding-right:36px;">Type</th>
                <th style="padding-right:36px;">Name</th>

            </tr>
        </thead>
        <tbody>
<?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) : ?>


            <tr>
                <td class="clubID" style="padding-right:36px;"><?php echo $row["clubID"]; ?></td>
                <td class="clubType" style="padding-right:36px;"><?php echo $row["clubType"]; ?></td>
                <td class="clubName" style="padding-right:36px;"><?php echo $row["clubName"]; ?></td>


</tr>
<?php endwhile; ?>
            <div class="footer">
                <p>Copyright Rohan, Gareth, Sam 2019</p>
            </div>
        </div>
    </body>
</html>
