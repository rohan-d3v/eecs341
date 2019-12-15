<?php include('navbar.php');?>

<h1>SEARCH</h1><br>
</div>

<form action="/backend/search.php" id="clubForm" method="post">
    <div class="umbrella">   

        <br>  

        <div class="box">
            <select name="clubName" id="clubName">
                <option value="" disabled selected>Club Name</option>

                <option value="all">All</option>
                <option value="club1">Club 1</option>
                <option value="club2">Club 2</option>
            </select>
        </div>

        <div class="box">
            <select name="Year" id="Year">
                <option value="" disabled selected>Year</option>

                <option value="All">All</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
            </select>
        </div>

        <div class="box">
            <select name="searchOption" id="searchOption">
                <option value="" disabled selected>Seach Option</option>

                <option value="exec">Show Exec Team</option>
                <option value="budget">Show Budget</option>
                <option value="avfbudget">Show Average Budget (pick 1 year, all clubs)</option>
            </select>
        </div>
    	    
        <br>
        <br>
        <br>
        <input class="sub" type="submit">

<?php include('footer.php');?>
