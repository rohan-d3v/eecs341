
<?php include('navbar.php');?>

<h1>ADD EXEC TEAM</h1><br>
</div>

<form action="PHP_addExec.php" id="clubForm" method="post">
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
            <input type="text" name = "president" id = "president" value=""class="search-txt" placeholder="President"/>
            <div class="search-btn">
            </div>
        </div>
        <br>
        <br> 
        
        <div class="search-box">
            <input type="text" name = "vicePresident" id = "vicePresident" value="" class="search-txt" placeholder="Vice President"/>
            <div class="search-btn">
            </div>
        </div>
        <br>
        <br> 
        
        <div class="search-box">
            <input type="text" name = "treasurer" id = "treasurer" value="" class="search-txt" placeholder="Treasurer"/>
            <div class="search-btn">
            </div>
        </div>
        <br>
        <br> 

        <div class="search-box">
            <input type="text" name = "riskManager" id = "riskManager" value="" class="search-txt" placeholder="Risk Manager"/>
            <div class="search-btn">
            </div>
        </div>
        <br>
        <br> 

        <div class="search-box">
            <input type="text" name = "advisor" id = "advisor" value="" class="search-txt" placeholder="Advisor"/>
            <div class="search-btn">
            </div>
        </div>
        <br>
        <br>
        
        <input class="sub" type="submit">
        
<?php include('footer.php');?>
