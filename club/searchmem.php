<?php include('navbar.php');?>

<h1>SEARCH ALL CLUBS THAT A STUDENT JOINED</h1><br>
</div>

<form action="PHP_searchmem.php" id="clubForm" method="post">
    <div class="umbrella">   

        <br>  

        <div class="search-box">
            <input type="text" name = "id" id = "id" value="" class="search-txt" placeholder="Student Name"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <div class="box">
            <select name="Year" id="Year">
                <option value="" disabled selected>Year</option>

                <option value="2000">ALL</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
            </select>
        </div>

        <br>

        <input class="sub" type="submit" value="SEARCH">

<?php include('footer.php');?>
