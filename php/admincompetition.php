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
<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif">


<div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="adminhome.php">Winner</a>
        <a class="active" href="adminhome.php">Home</a>
        <img class="logo" style="float: left" src="../image/logo.png" />
        <p style="float: left">AP Photography Club</p>
</div>
<nav class="buttonbackground">
<p>
	<a href="adminhome.php"><button class="compbtn">Back</button></a>
</p>
<p style="margin-right:50px; margin-top:20px;align:right">
	<a href="adminaddcomp.php"><button class="button button2" style="font-size:20px;border:5px solid black" >+ Add New Competition</button></a>
</p>
</nav>

<br>
<br>

<form name="compread2" method="get"  style=" padding-left:6px;">
  <?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition ORDER BY CompetitionID DESC");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
      $displayData = '
      <div class="box1" style="background-color:#A7CAD7;text-align:center;">
      <h2>Title: <input type="text" value = "'.$row["CompetitionTitle"].'" name="title"  style="width:200px" readonly/></h2>
      <img src="data:image/jpg;base64, '.base64_encode($row["CompetitionImage"]).'" style="width:300px; height:300px; ">
      <br>
      <br>

      <p> Theme: <input type="text" value = "'.$row["Theme"].'" name="theme"   readonly/></p>
      <p> Register Date: <input type="text" value = "'.$row["RegisterDate"].'" name="registerdate"   readonly/> </p>
      <p> Deadline: <input type="text" value = "'.$row["Deadline"].'" name="deadline"  style="width:210px" readonly/></p>
      <p> Competition Date: <input type="text" value = "'.$row["CompetitionDate"].'" name="compdate"  style="width:150px" readonly/></p>
      <p> Prize:  <textarea name = "prize" cols=40  rows=3 style="width: 80%;height: 90px;background: #f1f1f1;font-size:16px" readonly>'.$row["Prize"].'</textarea></p>
      <p> Eligibility: <input type="text" value = "'.$row["Eligibility"].'" name="eligibility"   readonly/></p>

    </div> 
    <div class="box2" style="background-color:#A7CAD7; margin-bottom:100px">
      <h3> Description </h3>
      <textarea name = "description" cols=40  rows=3 style="width: 90%;height: 338px;margin-left:25px;background: #f1f1f1;font-size:20px" readonly>'.$row["Description"].'</textarea>
      
      <h3> Guideline </h3>
      <textarea name = "guideline" cols=40  rows=3 style="width: 90%;height: 350px;margin-left:25px;background: #f1f1f1;font-size:20px" readonly>'.$row["Guideline"].'</textarea>
      <br><br>
      <br><br>

      <div style="padding-right:10px;padding-bottom:50px">
      <a href="report.php"><button class="button button1" style="margin: auto; float:right">Statistic Report</button></a>  
      </div>
    </div> ';
    echo $displayData;  
	}
	?>	
</form>

<!-- footer -->
<div class="footer" style="font-size:14px;margin-top:2200px" >
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left;font-size:14px">
	<div> 
		<img class="logo" style="width:120px; height:100px" src = "../image/logo.png"></br></br>
	</div>
	<div style="font-size:14px">
		<p><b>Asia Pacific University</b></p>
		Jalan Teknologi 5, </br>
		Taman Teknologi Malaysia,</br>
		57000 Kuala Lumpur,</br>
		Wilayah Persekutuan Kuala Lumpur.
	</div>
	</div>
	<div>
		<p style="text-align:center">Contact us by clicking
		<a href="https://api.whatsapp.com/send?phone=60163543712&text=Hello,%20I%20have%20questions%20regarding%20the%20AP%20Photo%20Competition%20%3E.%3C">here</a>
		</p>
	</div>
	<div style="text-align:center; font-size:10px">Copyright &copy; 2022 AP Photography Club</div></br>
</div></br>

</body>
</html>