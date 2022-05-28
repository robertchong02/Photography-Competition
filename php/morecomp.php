<?php
include("connect.php");
include("session.php");
$customerID = $_SESSION['Customer_ID'];

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
	<a href="userhome.php"><button class="button button1">BACK</button></a>
</p>

<br>
<br>
<br>

  <div class="box1" style="background-color:#A7CAD7;text-align:center">
  <form name="compread2" method="get"  style=" padding-left:6px; height:1030px">
  <?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '8'");
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
      <p> Prize:   <textarea name = "prize" cols=40  rows=3 style="width: 80%;height: 90px;background: #f1f1f1;" readonly>'.$row["Prize"].'</textarea></p>
      <p> Eligibility: <input type="text" value = "'.$row["Eligibility"].'" name="eligibility"  class="compread2" readonly/></p>

    </div> 
    <div class="box2" style="background-color:#A7CAD7; margin-bottom:30px; height:1035px">
      <h3> Description </h3>
      <textarea name = "description" cols=40  rows=3 style="width: 90%;height: 200px;margin-left:25px;background: #f1f1f1;" readonly>'.$row["Description"].'</textarea>
      
      <h3> Guideline </h3>
      <textarea name = "guideline" cols=40  rows=3 style="width: 90%;height: 333px;margin-left:25px;background: #f1f1f1;" readonly>'.$row["Guideline"].'</textarea>
      <br><br><br><br><br><br>

      <a href="viewcontent.php">
      <input style="position:absolute;bottom:0;right:0;margin-right:20px;background-color: #4CAF50;color:white" type="button" value="Go Voting">
      </a>
    </div> ';
    echo $displayData;  
	}
	?>	

<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '10'");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
      $displayData = '
<div class="box1" style="background-color:#A7CAD7;text-align:center">
  <form name="compread2" method="get"  style=" padding-left:6px">
  
      <h2>Title: <input type="text" value = "'.$row["CompetitionTitle"].'" name="title" class="compread2" readonly/></h2>
      <img src="data:image/jpg;base64, '.base64_encode($row["CompetitionImage"]).'" style="width:300px; height:300px; padding-top:10px ">
      <br>
      <br>

      <p> Theme: <input type="text" value = "'.$row["Theme"].'" name="theme"  class="compread2" readonly/></p>
      <p> Register Date: <input type="text" value = "'.$row["RegisterDate"].'" name="registerdate"  class="compread2" readonly/> </p>
      <p> Deadline: <input type="text" value = "'.$row["Deadline"].'" name="deadline" class="compread2" readonly/></p>
      <p> Competition Date: <input type="text" value = "'.$row["CompetitionDate"].'" name="compdate" class="compread2" readonly/></p>
      <p> Prize:   <textarea name = "prize" cols=40  rows=3 style="width: 80%;height: 90px;background: #f1f1f1;" readonly>'.$row["Prize"].'</textarea></p>
      <p> Eligibility: <input type="text" value = "'.$row["Eligibility"].'" name="eligibility"  class="compread2" readonly/></p>

    </div> 
    <div class="box2" style="background-color:#A7CAD7; margin-bottom:30px; height:1035px">
      <h3> Description </h3>
      <textarea name = "description" cols=40  rows=3 style="width: 90%;height: 200px;margin-left:25px;background: #f1f1f1;" readonly>'.$row["Description"].'</textarea>
      
      <h3> Guideline </h3>
      <textarea name = "guideline" cols=40  rows=3 style="width: 90%;height: 333px;margin-left:25px;background: #f1f1f1;" readonly>'.$row["Guideline"].'</textarea>
      <br><br><br><br><br><br>

      <a href="viewcontent.php">
      <input style="position:absolute;bottom:0;right:0;margin-right:20px;background-color: #4CAF50;color:white" type="button" value="Up Coming Event">
      </a>
    </div> ';
    echo $displayData;  
	}
	?>	

</body>
</html>