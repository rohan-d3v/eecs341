<?php include('navbar.php');?>

<h1>SEARCH AMONG ALL YEARS</h1><br>
</div>

<form action="PHP_searchallyear.php" id="clubForm" method="post">
    <div class="umbrella">   

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

        <input name="allyear1" class="sea" type="submit" value="SHOW ALL EVENTS">
        <br>
        <input name="allyear2" class="sea" type="submit" value="SHOW THE YEAR WITH THE HIGHEST BUDGET">
        <br>
        <input name="allyear3" class="sea" type="submit" value="SHOW THE YEAR WITH THE LOWEST BUDGET">
    	    
<?php include('footer.php');?>
