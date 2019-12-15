<?php include('navbar.php');?>

<h1>SEARCH AMONG ALL CLUBS</h1><br>
</div>

<form action="/backend/search.php" id="clubForm" method="post">
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

        <div class="sbox">
            <select name="searchOption" id="searchOption">
                <option value="" disabled selected>Seach Option</option>

                <option value="exec">SHOW ALL EVENTS WITH FOOD</option>
                <option value="avfbudget">SHOW ALL CLUBS WITH BUDGETS</option>
                <option value="avfbudget">SHOW AVERAGE BUDGET</option>
                <option value="avfbudget">SHOW CLUB WITH THE HIGHEST BUDGET</option>
                <option value="avfbudget">SHOW CLUB WITH THE LOWEST BUDGET</option>
                <option value="avfbudget">SHOW CLUB WITH THE MOST MEMBERS</option>
                <option value="avfbudget">SHOW CLUB WITH THE LEAST MEMBERS</option>
            </select>
        </div>
    	    
        <br>
        <br>
        <br>
        <input class="sub" type="submit" value="SEARCH">

<?php include('footer.php');?>
