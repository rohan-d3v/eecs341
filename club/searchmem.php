<?php include('navbar.php');?>

<h1>SEARCH ALL CLUBS THAT A STUDENT JOINED</h1><br>
</div>

<form action="PHP_searchmem.php" id="clubForm" method="post">
    <div class="umbrella">   

        <br>  

        <div class="search-box">
            <input type="text" name = "name" id = "name" class="search-txt" placeholder="Student Name"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <div class="box">
            <select name="Year" id="Year">
                <option value="" disabled selected>Year</option>

                <option value="2019">ALL</option>
                <option value="2019">2010</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
        </div>

        <br>

        <input class="sub" type="submit" value="SEARCH">

<?php include('footer.php');?>
