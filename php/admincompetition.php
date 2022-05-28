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
        <a href="logout.php">Logout</a>
        <a href="adminwinnerannounce.php">Winner</a>
        <a class="active" href="adminhome.php">Home</a>
        <img class="logo" style="float: left" src="../image/logo.png" />
        <p style="float: left">AP Photography Club</p>
    </div>
<nav class="buttonbackground">
<p style="margin-left:50px; margin-top:20px;align:left">
	<a href="adminhome.php"><button class="button button1">Back</button></a>
</p>
<!-- <p style="margin-top:20px;position:absolute;right:350px">
	<a href="admineditcomp.php"><button class="button button2" style="font-size:20px;border:5px solid black" >> Edit Competition Status</button></a>
</p> -->
<p style="margin-right:50px; margin-top:20px;align:right">
	<a href="adminaddcomp.php"><button class="button button2" style="font-size:20px;border:5px solid black" >+ Add New Competition</button></a>
</p>
</nav>

<br>
<br>

<form name="compread2" method="get"  style=" padding-left:6px; height:1030px">
  <?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition ORDER BY CompetitionID DESC");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
      $displayData = '
      <div class="box1" style="background-color:#A7CAD7;text-align:center;">
      <h2>Title: <input type="text" value = "'.$row["CompetitionTitle"].'" name="title" class="compread2" style="width:200px" readonly/></h2>
      <img src="data:image/jpg;base64, '.base64_encode($row["CompetitionImage"]).'" style="width:300px; height:300px; padding-top:10px ">
      <br>
      <br>

      <p> Theme: <input type="text" value = "'.$row["Theme"].'" name="theme"  class="compread2" readonly/></p>
      <p> Register Date: <input type="text" value = "'.$row["RegisterDate"].'" name="registerdate"  class="compread2" readonly/> </p>
      <p> Deadline: <input type="text" value = "'.$row["Deadline"].'" name="deadline" class="compread2" style="width:210px" readonly/></p>
      <p> Competition Date: <input type="text" value = "'.$row["CompetitionDate"].'" name="compdate" class="compread2" style="width:150px" readonly/></p>
      <p> Prize:  <textarea name = "prize" cols=40  rows=3 style="width: 80%;height: 90px;background: #f1f1f1;font-size:16px" readonly>'.$row["Prize"].'</textarea></p>
      <p> Eligibility: <input type="text" value = "'.$row["Eligibility"].'" name="eligibility"  class="compread2" readonly/></p>

    </div> 
    <div class="box2" style="background-color:#A7CAD7; margin-bottom:100px">
      <h3> Description </h3>
      <textarea name = "description" cols=40  rows=3 style="width: 90%;height: 333px;margin-left:25px;background: #f1f1f1;font-size:20px" readonly>'.$row["Description"].'</textarea>
      
      <h3> Guideline </h3>
      <textarea name = "guideline" cols=40  rows=3 style="width: 90%;height: 350px;margin-left:25px;background: #f1f1f1;font-size:20px" readonly>'.$row["Guideline"].'</textarea>
      <br><br>
      <br><br>
      <br><br>

      
      <a href="report.php"><button class="button button1" style="position:absolute;bottom:0;right:0;margin: 0 20px 20px 0">Statistic Report</button></a>  
      
    </div> 
  </div>';
    echo $displayData;  
	}
	?>	

</body>
</html>