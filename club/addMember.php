
<?php include('navbar.php');?>

<h1>ADD MEMBER</h1><br>
</div>

<form action="PHP_addMember.php" id="clubForm" method="post">
    <div class = "umbrella">

        <br>

        <div class="search-box">
            <input type="text" name = "id" id = "id" value="" class="search-txt" placeholder="Club ID"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <div class="box">
        <select name="yearList" id="yearList">
            <option value="" disabled selected>Year</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>
        </div>

        <br>
        <br>

        <div class="search-box">
            <input type="text" name = "memName" id = "memName" value="" class="search-txt" placeholder="Member Name"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>
        <br>
        <input class="sub" type="submit">
        
<?php include('footer.php');?>
