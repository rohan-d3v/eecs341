<?php include('navbar.php');?>

<h1>SEARCH MAIN</h1><br>
</div>

<form action="PHP_searchmain.php" id="clubForm" method="post">
    <div class="umbrella">   

        <br>  

        <input name="allclub" class="show" type="button" value="SHOW ALL CLUBS">
        <br>
        <input name="alllocation" class="show" type="button" value="SHOW ALL LOCATIONS">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="box">
            <select name="clubName" id="clubName">
                <option value="" disabled selected>Club Name</option>
                <option value="club1">Club 1</option>
                <option value="club2">Club 2</option>
            </select>
        </div>

        <br>
        <br>

        <div class="box">
            <select name="Year" id="Year">
                <option value="" disabled selected>Year</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
            </select>
        </div>

        <br>
        <br>

        <input name="allclub1" class="sea" type="submit" value="SHOW EXEC TEAM">
        <br>
        <input name="allclub2" class="sea" type="submit" value="SHOW PRESIDENT">
        <br>
        <input name="allclub3" class="sea" type="submit" value="SHOW VICE PRESIDENT">
        <br>
        <input name="allclub4" class="sea" type="submit" value="SHOW TREASURE">
        <br>
        <input name="allclub5" class="sea" type="submit" value="SHOW RISK MANAGER">
        <br>
        <input name="allclub6" class="sea" type="submit" value="SHOW ADVISOR">
        <br>
        <input name="allclub7" class="sea" type="submit" value="SHOW ALL EVENTS">
        <br>
        <input name="allclub8" class="sea" type="submit" value="SHOW ALL EVENTS WITH FOOD">
        <br>
        <input name="allclub9" class="sea" type="submit" value="SHOW ALL MEMBERS">
        

<?php include('footer.php');?>
