<?php include('navbar.php');?>

<h1>UPDATE EVENT</h1><br>
</div>

<form action="PHP_updateEvent.php" id="clubForm" method="post">
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
            <input type="text" name = "eveName" id = "eveName" value="" class="search-txt" placeholder="Event Name"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <input class="del" type="submit" value="DELETE EVENT">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="search-box">
            <input type="text" name = "eveName" id = "eveName" value="" class="search-txt" placeholder="New Event Name"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <div class="search-box">
            <input type="text" name = "date" id = "date" value="" class="search-txt" placeholder="New Date [in MMDD]"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <div class="search-box">
            <input type="text" name = "room" id = "room" value="" class="search-txt" placeholder="New Location"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <label class="checkbox-label">
            <input type="checkbox" name = "food" id = "food" value="">
            <span class="checkbox-custom circular"></span>
        </label>
        <div class="input-title">[New] Food Provided</div>
        
        <br>
        <br>

        <input class="sub" type="submit" value="UPDATE">

<?php include('footer.php');?>