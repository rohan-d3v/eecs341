<?php include('navbar.php');?>

<h1>SEARCH AMONG ALL CLUBS</h1><br>
</div>

<form action="PHP_searchclub.php" id="clubForm" method="post">
    <div class="umbrella">   

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

        <input name="allclub1" class="sea" type="submit" value="SHOW ALL EVENTS">
        <br>
        <input name="allclub1" class="sea" type="submit" value="SHOW ALL CLUBS WITH BUDGETS">
        <br>
        <input name="allclub1" class="sea" type="submit" value="SHOW AVERAGE BUDGET">
        <br>
        <input name="allclub1" class="sea" type="submit" value="SHOW CLUB WITH THE HIGHEST BUDGET">
        <br>
        <input name="allclub1" class="sea" type="submit" value="SHOW CLUB WITH THE LOWEST BUDGET">
        <br>
        <input name="allclub1" class="sea" type="submit" value="SHOW CLUB WITH THE MOST MEMBERS">
        <br>
        <input name="allclub1" class="sea" type="submit" value="SHOW CLUB WITH THE LEAST MEMBERS">


<?php include('footer.php');?>
