<?php

    include "PHP_common.php";



    $searchOption = strval($_POST["searchOption"]);
    $club   = strval($_POST["clubName"]);
    $clubVal = "AND clubID ='$club' ";
    $clubVal2 = "clubID='$club' ";


    if($club==""){$clubVal = "";};
    if($club==""){$clubVal = ""; $clubVal2 = "";};


    if($searchOption == "pres") {
    $sql = "select president, member.year from execteam, club, member where club.clubID = execteam.clubID AND president = member.name " .$clubVal;};
    #show all presidents

    if($searchOption == "vicepres") {
    $sql = "select viceP, member.year from execteam, club, member where club.clubID = execteam.clubID and viceP = member.name " .$clubVal;};
    #show all vice presidents

    if($searchOption == "treasurer") {
    $sql = "select treasurer, member.year from execteam, club, member where club.clubID = execteam.clubID and treasurer = member.name " .$clubVal;};
    # show all treasurer

    if($searchOption == "risk") {
    $sql = "select riskM, member.year from execteam, club, member where club.clubID = execteam.clubID and riskM = member.name " .$clubVal; };
    # show all risk managers

    if($searchOption == "advisor") {
    $sql = "select advisor from execteam, club where club.clubID = execteam.clubID " .$clubVal;};
    # show all advisors

    if($searchOption == "events") {
    $sql = "select * from event where" .$clubVal2;};
    # show events

    if($searchOption == "eventsFood") {
    $sql = "select * from event where food = 1 " .$clubVal;};
    # show events

    if($searchOption == "budgetH") {
    $sql = "select b0.year, b0.amountTotal from budget b0 Where b0.amountTotal >= all (select b1.amountTotal From budget b1 Where b1.year <> b0.year and b1.clubID = b0.clubID) " .$clubVal;};
    # show year with highest budget

    if($searchOption == "budgetL") {
    $sql = "select b0.year, b0.amountTotal from budget b0 Where b0.amountTotal <= all (select b1.amountTotal From budget b1 Where b1.year <> b0.year and b1.clubID = b0.clubID) " .$clubVal;};
    # show year with lowest budget
<<<<<<< HEAD

  #  echo $club;
  #  echo $searchOption;
    #echo $sql;
=======
$sql = "Select c.clubID, c.clubName, b0.amountTotal From Club c, Budget b0 Where b0.amountTotal >= (Select b1.amountTotal From Budget b1 Where b1.clubID <> b0.clubID) And year = 2019;"
>>>>>>> b4a969044be2fb23ae4a56a2776a2e182697e9aa

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {

if($searchOption == "pres") {
  while($row = mysqli_fetch_assoc($result))  {
    echo "President: " .$row["president"]. " - Grade: " .$row["member.year"]. " - Club ID: " .$row["clubID"];
};
}

  if($searchOption == "vicepres") {
    while($row = mysqli_fetch_assoc($result))  {
      echo "Vice president: " .$row["vicePresident"]. " - Grade: " .$row["member.year"]. " - Club ID: " .$row["clubID"];
  }
  }

  if($searchOption == "treasurer") {
    while($row = mysqli_fetch_assoc($result))  {
      echo "Treasurer: " .$row["treasurer"]. " - Grade: " .$row["member.year"]. " - Club ID: " .$row["clubID"];
    }
  }


    if($searchOption == "risk") {
    while($row = mysqli_fetch_assoc($result))  {
        echo "Risk Manager: " .$row["riskManager"]. " - Grade: " .$row["member.year"]. " - Club ID: " .$row["clubID"];
    }
  }

    if($searchOption == "advisor") {
    while($row = mysqli_fetch_assoc($result))  {
        echo "Advisor: " .$row["advisor"]. " - Year: " .$row["year"]. " - Club ID: " .$row["clubID"];
    }
  }

    if($searchOption == "events") {
    while($row = mysqli_fetch_assoc($result))  {
        echo "Event: " .$row["eventName"]. " - Date: " .$row["eventDate"]. " - Food: " .$row["food"]. " - Location: " .$row["location"]. " - Club ID: " .$row["clubID"];
    }
  }


  if($searchOption == "eventsFood") {
  while($row = mysqli_fetch_assoc($result))  {
      echo "Event: " .$row["eventName"]. " - Date: " .$row["eventDate"]. " - Food: " .$row["food"]. " - Location: " .$row["location"]. " - Club ID: " .$row["clubID"];
  }
}


if($searchOption == "budgetH") {
while($row = mysqli_fetch_assoc($result))  {
    echo "Year: " .$row["year"]. " - Highest Budget: " .$row["amountTotal"];
}
}

if($searchOption == "budgetL") {
while($row = mysqli_fetch_assoc($result))  {
    echo "Year: " . $row["year"]. " - Lowest Budget: " .$row["amountTotal"];
}

}
}


?>
