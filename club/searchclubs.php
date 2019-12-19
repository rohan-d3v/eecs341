<?php include('navbar.php');?>

<h1>SEARCH CLUB</h1><br>
</div>

<form action="PHP_searchclub.php" id="clubForm" method="post">
    <div class = "umbrella">

        <br>

        <div class="search-box">
            <input type="text" name = "name" id = "name" value="" class="search-txt" placeholder="Club Name"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>


        <div class="box">
        <select name="typeList" id="typeList" value = "">
            <option value="" disabled selected>Type</option>
            <option value="Athletic">Athletic</option>
            <option value="Art">Art</option>
            <option value="Academic">Academic</option>
            <option value="Political">Political</option>
            <option value="Other">Other</option>
        </select>
        </div>


        <br>
        <br>


        <input class="sub" type="submit">

<?php include('footer.php');?>
