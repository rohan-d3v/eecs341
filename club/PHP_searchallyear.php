<?php

    include "PHP_common.php";



    $club   = strval($_POST["clubname"]);


    if($club=="blank"){$clubVal = "";};
    else{$clubVal = "AND clubID='$type' ";}
    $clubVal2 = "clubID='$type' "


    $sql = "select president, member.year from execteam, club, member where club.clubID = execteam.clubID AND president = member.name" .$clubVal;
    #show all presidents

    $sql = "select viceP, member.year from execteam, club, member where club.clubID = execteam.clubID and viceP = member.name" .$clubVal;
    #show all vice presidents

    $sql = "select treasurer, member.year from execteam, club, member where club.clubID = execteam.clubID and treasurer = member.name" .$clubVal;
    # show all treasurer

    $sql = "select riskM, member.year from execteam, club, member where club.clubID = execteam.clubID and riskM = member.name" .$clubVal;
    # show all risk managers

    $sql = "select advisor from execteam, club where club.clubID = execteam.clubID" .$clubVal;  
    # show all advisors

    $sql = "select * from events where" .$clubVal2;
    # show events

    $sql = "select * from events where food = 1;" .$clubVal;
    # show events

    $sql = "select year, max(amountTotal) from budget where" .$clubVal2 " group by year";
    # show year with lowest budget


	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
?>


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


                <table id = "clubList"">
                    <thead>
                        <tr>
                            <th style="padding-right:36px;">Event Name</th>
                            <th style="padding-right:36px;">Event Date</th>
                            <th style="padding-right:36px;">Location</th>
                            <th style="padding-right:36px;">Club Name</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) : 
                        ?>

                        <tr>
                            <td class="updateSize" style="padding-right:36px;"><?php echo $row["size"]; ?></td>
                            <td class="updateBrand" style="padding-right:36px;"><?php echo $row["brand_name"]; ?></td>
                            <td class="updateclub" style="padding-right:36px;"><?php echo $row["clubID"]; ?></td>
                            <td class="updateColor" style="padding-right:36px;"><?php echo $row["color"]; ?></td>
            		            <td class="updateSex" style="padding-right:36;"><?php echo $row['type']; ?></td>
                            <td class="updatePrice" style="padding-right:36px;"><?php echo $row["price"]; ?></td>
            		
                            <?php
                    			$ec = " AND brand_name='$row[brand_name]' AND clubID='$row[clubID]' AND color='$row[color]' AND type='$row[type]' AND price='$row[price]'"; 
                            ?>

                            <td class="deleteRow" style="padding-right:36px;">
                    			<form action="delete.php" method="post">
                    				<input type="hidden" name="id" value="<?php echo 'size =' . $row['size'] . $ec; ?>">
                            		<input type="submit" name="submit" value="Delete">
                    			</form>
                            </td>

                    		<td class="updateRow" style="padding-right:36px;">
                    			<form action="update.php" method="post">
                    				<input type="text" name="updatePrice" value="0.0" size="4">
                    				<input type="hidden" name="priceVal" value="<?php echo $row['price']; ?>">
                    				<input type="hidden" name="updateId" value="<?php echo 'size =' . $row['size'] . $ec; ?>">
                    				<input type="submit" name="submit" value="Update">
                    			</form>
                    		</td>

                        </tr>

                        <?php 
                            endwhile; 
                        ?>

                    </tbody>
                </table>
            </div>

        </div>
    </body>
</html>
