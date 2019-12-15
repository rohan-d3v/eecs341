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

        <div class="sbox">
            <select name="searchOption" id="searchOption">
                <option value="" disabled selected>Seach Option</option>

                <option value="exec">SHOW ALL PRESIDENTS</option>
                <option value="budget">SHOW ALL VICE PRESIDENTS</option>
                <option value="avfbudget">SHOW ALL TREASURES</option>
                <option value="avfbudget">SHOW ALL RISK MANAGERS</option>
                <option value="avfbudget">SHOW ALL ADVISORS</option>
                <option value="avfbudget">SHOW ALL EVENTS</option>
                <option value="avfbudget">SHOW ALL EVENTS WITH FOOD</option>
                <option value="avfbudget">SHOW THE YEAR WITH THE HIGHEST BUDGET</option>
                <option value="avfbudget">SHOW THE YEAR WITH THE LOWEST BUDGET</option>
            </select>
        </div>
    	    
        <br>
        <br>
        <br>
        <input class="sub" type="submit" value="SEARCH">

<?php include('footer.php');?>
