<?php include('navbar.php');?>

<h1>UPDATE CLUB</h1><br>
</div>
    
<form action="PHP_updateClub.php" id="clubForm" method="post">
    <div class = "umbrella">
    
        <br> 

        <div class="search-box">
            <input type="text" name = "id" id = "id" value="" class="search-txt" placeholder="Club ID"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <input class="del" type="submit" value="DELETE CLUB">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="search-box">
            <input type="text" name = "name" id = "name" value="" class="search-txt" placeholder="New Club Name"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br> 

        <div class="box">
        <select name="typeList" id="typeList">
            <option value="" disabled selected>New Type</option>
            <option value="Athletic">Athletic</option>
            <option value="Art">Art</option>
            <option value="Academic">Academic</option>
            <option value="Political">Political</option>
            <option value="Other">Other</option>
        </select>
        </div>

        <br>
        <br>
        
        <input class="sub" type="submit" value="UPDATE">
        
<?php include('footer.php');?>
