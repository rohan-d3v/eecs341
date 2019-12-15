<!DOCTYPE html>
 <!-- This HTML file serves as the result page from adding a shoe to the inventory-->
<html>
    <head>
        <title>CWRU Clubs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/searchResultStyle.css"/>
    </head>
    <body>
        <div class="grid">
            <div class="title">
                <h1>CWRU Clubs</h1><br><br>
                <p>Copyright Rohan, Gareth, Sam 2019</p>
            </div>
            <div class="nav1">
                <button onclick="location.href='search.html'" type="browseButton">Browse The Clubs</button>
            </div>
            <div class="nav2">
                <button onclick="location.href='home.html'" type="homeButton">Home</button>
            </div>
            <div class="nav3">
                <button onclick="location.href='add.html'" type="addButton">Add To  Clubs</button>
            </div>
            <div class="content">
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
  $typeVal  = "AND name='$type' ";

	if($name=="blank"){$nameVal = ""; $typeVal = "type='$type' ";};
  if($type=="blank"){$typeVal = "";};

	if($name=="blank" && $type=="blank")
	{$whereVal = "";};

	$sql = "select * from club" . $whereVal . $nameVal . $typeVal;                             // this searches with year, clubid, name, and type if they are inputted

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
?>
<table id = "clubList"">
        <thead>
            <tr>
                <th style="padding-right:36px;">Year</th>
                <th style="padding-right:36px;">Club ID</th>
                <th style="padding-right:36px;">Name</th>
                <th style="padding-right:36px;">Type</th>
  		          <th style="padding-right:36px;">Delete</th>
		            <th style="padding-right:36px;">Update Price</th>

            </tr>
        </thead>
        <tbody>
<?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) : ?>


            <tr>
                <td class="updateSize" style="padding-right:36px;"><?php echo $row["clubID"]; ?></td>
                <td class="updateclub" style="padding-right:36px;"><?php echo $row["clubName"]; ?></td>
                <td class="updateColor" style="padding-right:36px;"><?php echo $row["clubType"]; ?></td>


</tr>
<?php endwhile; ?>
            <div class="footer">
                <p>Copyright Rohan, Gareth, Sam 2019</p>
            </div>
        </div>
    </body>
</html>
