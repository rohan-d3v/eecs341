<!DOCTYPE html>
 <!-- This HTML file serves as the page to add clubs -->
<html>
    <head>
        <title>CWRU Clubs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/add.css"/>
        <link rel="stylesheet" type="text/css" href="style/navbar.css"/>
        <script src="https://kit.fontawesome.com/cfe22e3d35.js" crossorigin="anonymous"></script>


    </head>
    <body>

        <div class="title">
            <h1>CWRU Clubs</h1>
            <h1>ADD CLUB</h1><br>
        </div>
        
        <?php
            include('navbar.php');
        ?>

            
        <form action="/backend/addClub.php" id="clubForm" method="post">

            <div class = "umbrella">
            

                <div class="search-box">
                    <input type="text" name = "name" id = "name" value="" class="search-txt" placeholder="Club Name"/>
                    <div class="search-btn">
                    </div>
                </div>

                <br>
                <br> 


                <div class="box">
                <select name="typeList" id="typeList">
                    <option value="" disabled selected>Type</option>
                    <option value="Athletic">Athletic</option>
                    <option value="Art">Art</option>
                    <option value="Academic">Academic</option>
                    <option value="Political">Political</option>
                    <option value="Other">Other</option>
                </select>
                </div>

                <br>
                <div class="group">Executive Team (Optional | Can Add Later): </div>
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
                

                <div class="search-box">
                    <input type="text" name = "president" id = "president" value=""class="search-txt" placeholder="President"/>
                    <input type="text" name = "pid" id = "pid" value="" class="search-txt" placeholder="Student ID (Optional)"/>
                    <div class="search-btn">
                    </div>
                </div>

                <div class="box">
                <select name="typeList" id="pYearList">
                    <option value="Freshman">Freshman</option>
                    <option value="Sophmore">Sophmore</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                </select>
                </div>

                <br>
                <br> 
                
                <div class="search-box">
                    <input type="text" name = "vicePresident" id = "vicePresident" value="" class="search-txt" placeholder="Vice President"/>
                    <input type="text" name = "vid" id = "vid" value="" class="search-txt" placeholder="Student ID (Optional)"/>
                    <div class="search-btn">
                    </div>
                </div>

                <div class="box">
                <select name="typeList" id="vYearList">
                    <option value="Freshman">Freshman</option>
                    <option value="Sophmore">Sophmore</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                </select>
                </div>


                <br>
                <br> 
                
                <div class="search-box">
                    <input type="text" name = "treasurer" id = "treasurer" value="" class="search-txt" placeholder="Treasurer"/>
                    <input type="text" name = "tid" id = "tid" value="" class="search-txt" placeholder="Student ID (Optional)"/>
                    <div class="search-btn">
                    </div>
                </div>
                
                <div class="box">
                <select name="typeList" id="tYearList">
                    <option value="Freshman">Freshman</option>
                    <option value="Sophmore">Sophmore</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                </select>
                </div>


                <br>
                <br> 

                <div class="search-box">
                    <input type="text" name = "riskManager" id = "riskManager" value="" class="search-txt" placeholder="Risk Manager"/>
                    <input type="text" name = "rid" id = "rid" value="" class="search-txt" placeholder="Student ID (Optional)"/>
                    <div class="search-btn">
                    </div>
                </div>

                <div class="box">
                <select name="typeList" id="rYearList">
                    <option value="Freshman">Freshman</option>
                    <option value="Sophmore">Sophmore</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                </select>
                </div>


                <br>
                <br> 


                <div class="search-box">
                    <input type="text" name = "advisor" id = "advisor" value="" class="search-txt" placeholder="Advisor"/>
                    <div class="search-btn">
                </div>
                

                <br>
                <br>
            
                
                <input class="sub" type="submit">
                
                <br>
                <br>
                <br>
                <br>

            </div>

            
        
        </form>


    </body>
</html>
