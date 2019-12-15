
<?php include('navbar.php');?>

<h1>ADD EVENT</h1><br>
</div>

<form action="PHP_addEvent.php" id="clubForm" method="post">
    <div class = "umbrella">

        <br>

        <div class="search-box">
            <input type="text" name = "id" id = "id" value="" class="search-txt" placeholder="Club ID"/>
            <div class="search-btn">
            </div>
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

        <div class="date-search-box">
            <input type="date" name = "date" id = "date" value="" class="date-search-txt" placeholder="Date"/>
        </div>

        <br>
        <br>

        <div class="search-box">
            <input type="text" name = "room" id = "room" value="" class="search-txt" placeholder="Location"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>
        <label class="checkbox-label">
            <input type="checkbox" name = "food" id = "food" value="">
            <span class="checkbox-custom circular"></span>
        </label>
        <div class="input-title">Food Provided</div>
        <input class="sub" type="submit">

<?php include('footer.php');?>
