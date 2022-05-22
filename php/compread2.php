<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Photography competition</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/default.css" rel="stylesheet" type="text/css">
</head>
<body style="background-image:url('../image/bg1.png')">


<div class="topnav">
  <a href="#Logout">Logout</a>
  <a href="editprofile.html">Profile</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
    <a class="active" href="userhome.html">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>

<p style="margin-left:50px; margin-top:20px">
	<a href="userhome.html"><button class="button button1">BACK</button></a>
</p>

<br>
<br>
<br>

  <div class="box1" style="background-color:#A7CAD7">
  <form name="compread2" method="get"  style=" padding-left:6px">
  <?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '6'");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
      $displayData = '
      <h2>Title: <input type="text" value = "'.$row["CompetitionTitle"].'" name="title" class="compread2" readonly/></h2>
      <img src="data:image/jpg;base64, '.base64_encode($row["CompetitionImage"]).'" style="width:300px; height:300px; padding-top:10px ">
      <br>
      <br>

      <p> Theme: <input type="text" value = "'.$row["Theme"].'" name="theme"  class="compread2" readonly/></p>
      <p> Register Date: <input type="text" value = "'.$row["RegisterDate"].'" name="registerdate"  class="compread2" readonly/> </p>
      <p> Deadline: <input type="text" value = "'.$row["Deadline"].'" name="deadline" class="compread2" readonly/></p>
      <p> Competition Date: <input type="text" value = "'.$row["CompetitionDate"].'" name="compdate" class="compread2" readonly/></p>
      <p> Prize: <input type="text" value = "'.$row["Prize"].'" name="prize" class="compread2" readonly/></p>
      <p> Eligibility: <input type="text" value = "'.$row["Eligibility"].'" name="eligibility"  class="compread2" readonly/></p>

    </div> 
    <div class="box2" style="background-color:#A7CAD7; margin-bottom:30px">
      <h3> Description </h3>
      <textarea name = "description" cols=40  rows=3 style="width: 90%;height: 150px;margin-left:25px" readonly>'.$row["Description"].'</textarea>
      
      <h3> Guideline </h3>
      <textarea name = "guideline" cols=40  rows=3 style="width: 90%;height: 250px;margin-left:25px" readonly>'.$row["Guideline"].'</textarea>
      <div class="tacbox">
        <input id="checkbox" type="checkbox" />
        <label for="checkbox"> I agree to these <a href="#">Terms and Conditions</a></label>
      </div>
      <a href="compterms.html">
        <input style="float:right;margin-right: 10px;" type="button" value="Next">
      </a>
    </div> ';
    echo $displayData;  
	}
	?>	


</body>
</html>