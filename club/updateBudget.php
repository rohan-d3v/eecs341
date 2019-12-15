<?php include('navbar.php');?>

<h1>UPDATE BUDGET</h1><br>
</div>

<form action="PHP_updateBudget.php" id="clubForm" method="post">
    <div class = "umbrella">

        <br>

        <div class="search-box">
            <input type="text" name = "id" id = "id" value="" class="search-txt" placeholder="Club ID"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br> 

        <div class="box">
        <select name="yearList" id="yearList">
            <option value="" disabled selected>Year</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>
        </div>

        <br>
        <br>

        <input class="del" type="submit" value="DELETE BUDGET">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="search-box">
            <input type="text" name = "budget" id = "budget" value=""class="search-txt" placeholder="New Budget Amount"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <input class="sub" type="submit" value="UPDATE">

<?php include('footer.php');?>
