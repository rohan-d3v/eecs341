<!DOCTYPE html>
 <!-- This HTML file serves as the page to add events with locations -->
<html>
  <head>
    <title>CWRU Clubs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/add.css"/>
    <link rel="stylesheet" type="text/css" href="style/navbar.css"/>
    <link rel="stylesheet" type="text/css" href="style/checkbox.css"/>
    <script src="https://kit.fontawesome.com/cfe22e3d35.js" crossorigin="anonymous"></script>
  </head>

  <body>

    <div class="title">
        <h1>CWRU Clubs</h1>
        <h1>UPDATE EVENT</h1><br>
    </div>
    
    <?php
        include('navbar.php');
    ?>

    <div class="content">
    <p>Add to the collection of events and locations</p>
    </div>

    <br>

    <form action="backend/updateEvent.php" id="clubForm" method="post">
      <div class = "umbrella">

        <br>
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

        <div class="search-box">
            <input type="text" name = "date" id = "date" value="" class="search-txt" placeholder="Date (in MMDD format)"/>
            <div class="search-btn">
            </div>
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

        <div class="search-box">
          <input type="text" name = "capacity" id = "capacity" value="" class="search-txt" placeholder="Capacity"/>
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

        <br>
        <br>
        <br>
        <br>
                <br>
        <br>
      </div>

      
    </form>

  </body>
</html>
