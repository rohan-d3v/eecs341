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

 	<input class="sub" type="submit" value="All Events">
        <br>
        <input class="sub" type="submit" value="CLUBS WITH BUDGETS">
        <br>
        <input class="sub" type="submit" value="AVERAGE BUDGET">
        <br>
        <input class="sub" type="submit" value="CLUB WITH HIGHEST BUDGET">
        <br>
        <input class="sub" type="submit" value="CLUB WITH LOWEST BUDGET">
        <br>
        <input class="sub" type="submit" value="CLUB WITH MOST MEMBERS">
        <br>
        <input class="sub" type="submit" value="CLUB WITH LEAST MEMBERS">


<?php include('footer.php');?>
