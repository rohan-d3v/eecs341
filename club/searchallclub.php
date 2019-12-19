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
<<<<<<< HEAD
	<form method='post' action = "/PHP_searchbudget.php"><input class="sub" type="submit" value="All Events"></form>
=======
<<<<<<< HEAD
        <input name="allclub2" class="sea" type="submit" value="SHOW ALL CLUBS WITH BUDGETS">
        <br>
        <input name="allclub3" class="sea" type="submit" value="SHOW AVERAGE BUDGET">
        <br>
        <input name="allclub4" class="sea" type="submit" value="SHOW CLUB WITH THE HIGHEST BUDGET">
        <br>
        <input name="allclub5" class="sea" type="submit" value="SHOW CLUB WITH THE LOWEST BUDGET">
        <br>
        <input name="allclub6" class="sea" type="submit" value="SHOW CLUB WITH THE MOST MEMBERS">
        <br>
        <input name="allclub7" class="sea" type="submit" value="SHOW CLUB WITH THE LEAST MEMBERS">
=======
        <input class="sub" type="submit" value="CLUBS WITH BUDGETS">
>>>>>>> 9ea6a0de3168f5060e492a22e7bced09586b2c42
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
>>>>>>> 92b5165c4cb78d4f246b03e5fa4c9f20f61cba1c


<?php include('footer.php');?>
