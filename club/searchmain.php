<?php include('navbar.php');?>

<h1>SEARCH MAIN</h1><br>
</div>

<form action="/backend/search.php" id="clubForm" method="post">
    <div class="umbrella">   

        <br>  

        <input name="allclub" class="show" type="button" value="SHOW ALL CLUBS">

        <br>
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

        <div class="sbox">
            <select name="searchOption" id="searchOption">
                <option value="" disabled selected>Seach Option</option>

                <option value="exec">SHOW EXEC TEAM</option>
                <option value="budget">SHOW PRESIDENT</option>
                <option value="avfbudget">SHOW VICE PRESIDENT</option>
                <option value="exec">SHOW TREASURE</option>
                <option value="budget">SHOW RISK MANAGER</option>
                <option value="avfbudget">SHOW ADVISOR</option>
                <option value="budget">SHOW ALL EVENTS</option>
                <option value="avfbudget">SHOW ALL EVENTS WITH FOOD</option>
                <option value="avfbudget">SHOW ALL MEMBERS</option>
            </select>
        </div>

        <br>
    	    
        <input class="sub" type="submit" value="SEARCH">

<?php include('footer.php');?>
