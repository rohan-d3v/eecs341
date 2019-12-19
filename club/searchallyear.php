<?php include('navbar.php');?>

<h1>SEARCH AMONG ALL YEARS</h1><br>
</div>

<form action="/backend/search.php" id="clubForm" method="post">
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

        <input name="allyear1" class="sea" type="submit" value="SHOW ALL PRESIDENTS">
        <br>
        <input name="allyear2" class="sea" type="submit" value="SHOW ALL VICE PRESIDENTS">
        <br>
        <input name="allyear3" class="sea" type="submit" value="SHOW ALL TREASURES">
        <br>
        <input name="allyear4" class="sea" type="submit" value="SHOW ALL RISK MANAGERS">
        <br>
        <input name="allyear5" class="sea" type="submit" value="SHOW ALL ADVISORS">
        <br>
        <input name="allyear6" class="sea" type="submit" value="SHOW ALL EVENTS">
        <br>
        <input name="allyear7" class="sea" type="submit" value="SHOW ALL EVENTS WITH FOOD">
        <br>
        <input name="allyear8" class="sea" type="submit" value="SHOW THE YEAR WITH THE HIGHEST BUDGET">
        <br>
        <input name="allyear9" class="sea" type="submit" value="SHOW THE YEAR WITH THE LOWEST BUDGET">
    	    
<?php include('footer.php');?>
