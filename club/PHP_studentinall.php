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


    // dont know what to put in the bracket []

        $name = strval($_POST["name"]);
        $year = strval($_POST["Year"]);

        // did not include any if statements here don't know what they do

    $sql = "select m.name from Member m where m.year = 2019 and not exists (select c.clubID from Club c) not in (Select m.clubID from Member m1 Where m1.name = m.name);"
    $result = mysqli_query($conn, $sql);
	echo $sql;
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
                <td class="updateColor" style="padding-right:36px;"><?php echo $row["name"]; ?></td>


</tr>
<?php endwhile; ?>
            <div class="footer">
                <p>Copyright Rohan, Gareth, Sam 2019</p>
            </div>
        </div>
    </body>
</html>

