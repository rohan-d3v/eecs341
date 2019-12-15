<!DOCTYPE html>
 <!-- This HTML file serves as the page to conduct an inventory search-->
<html>
    <head>
        <title>CWRU Shoes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/search.css"/>
        <link rel="stylesheet" type="text/css" href="style/navbar.css"/>
        <script src="https://kit.fontawesome.com/cfe22e3d35.js" crossorigin="anonymous"></script>

    </head>   
    <body>



        <div class="title">
            <h1>CWRU Clubs</h1>
            <h1>SEARCH</h1><br>
        </div>
        
        <?php
            include('navbar.php');
        ?>


        <div class="content">
        <form action="/backend/search.php" id="clubForm" method="post">
                            

            <div class="box">
                <select name="clubName" id="clubName">
                    <option value="" disabled selected>Club Name</option>

                    <option value="all">All</option>
                    <option value="club1">Club 1</option>
                    <option value="club2">Club 2</option>
                </select>
            </div>

            <div class="box">
                <select name="Year" id="Year">
                    <option value="" disabled selected>Year</option>

                    <option value="All">All</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                </select>
            </div>

            <div class="box">
                <select name="searchOption" id="searchOption">
                    <option value="" disabled selected>Seach Option</option>

                    <option value="exec">Show Exec Team</option>
                    <option value="budget">Show Budget</option>
                    <option value="avfbudget">Show Average Budget (pick 1 year, all clubs)</option>
                </select>
            </div>
			    
            <br>
            <br>
            <br>
            <input class="sub" type="submit">
        
        </form>


        </div>
    </body>
</html>
