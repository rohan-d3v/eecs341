<?php include('navbar.php');?>

<h1>SEARCH AMONG ALL CLUBS</h1><br>
</div>

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

 	<form method='post' action = "/PHP_searchclub.php"><input class="sub" type="submit" value="All Events"></form>
        <br>
	<form method='post' action = "/PHP_searchbudget.php"><input class="sub" type="submit" value="All Events"></form>
        <br>
        <input class="sub" type="submit" value="AVERAGE BUDGET">
        <br>
	<form method='post' action = "/PHP_searchhighestbudget.php"><input class="sub" type="submit" value="Club w/ Highest Budget"></form>
        <br>
        <form method='post' action = "/PHP_searchlowestbudget.php"><input class="sub" type="submit" value="CLUB W/ LOWEST BUDGET"></form>
        <br>
        <input class="sub" type="submit" value="CLUB WITH MOST MEMBERS">
        <br>
        <input class="sub" type="submit" value="CLUB WITH LEAST MEMBERS">


<?php include('footer.php');?>
