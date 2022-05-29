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

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif">
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="editprofile.php">Profile</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
  <a class="active" href="main.php">Home</a>
  <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">AP Photography Club</p>
</div>

<p style="margin-left:50px; margin-top:20px">
	<a href="userhome.php"><button class="button button1">BACK</button></a>
</p>

<br>
<br>
<br>

  <div class="box1" style="background-color:#A7CAD7;text-align:center;">
  <form name="compread2" action="compterms.php" method="get"  style=" padding-left:6px">
  <?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = ".$_GET['CompID']);
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
      echo '<input style="display:none;" type="text" name="CompID" value='.$_GET["CompID"]. '>';
      $displayData = '
      <h2>Title: <input type="text" value = "'.$row["CompetitionTitle"].'" name="title" class="compread2" style="width:200px; height:50px" readonly/></h2>
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
      <textarea name = "description" cols=40  rows=3 style="width: 90%;height: 205px;margin-left:25px;background: #f1f1f1;font-size:20px" readonly>'.$row["Description"].'</textarea>
      
      <h3> Guideline </h3>
      <textarea name = "guideline" cols=40  rows=3 style="width: 90%;height: 337px;margin-left:25px;background: #f1f1f1;font-size:20px" readonly>'.$row["Guideline"].'</textarea>
      <br><br><br><br>
      <div class="tacbox">
        <input id="checkbox" type="checkbox" required/>
        <label for="checkbox"> I agree to these <a href="#">Terms and Conditions</a></label>
      </div>
        <input style="float:right;margin-right: 10px;" type="submit" value="Next">
    </div> ';

    echo $displayData;  
	}
	?>	
</form> 

<!-- footer -->
<div class="footer" style="font-size:14px; margin-top:1100px" >
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left">
	<div style="padding-top:20px"> 
		<img class="logo" style="width:120px; height:100px" src = "../image/logo.png"></br></br>
	</div>
	<div style="font-size:14px">
		<p><b>Asia Pacific University</b></p>
		Jalan Teknologi 5, </br>
		Taman Teknologi Malaysia,</br>
		57000 Kuala Lumpur,</br>
		Wilayah Persekutuan Kuala Lumpur.
	</div>
	</div></br>
	<div>
		<p style="text-align:center">Contact us by clicking
		<a href="https://api.whatsapp.com/send?phone=60163543712&text=Hello,%20I%20have%20questions%20regarding%20the%20AP%20Photo%20Competition%20%3E.%3C">here</a>
		</p>
	</div>
	<div style="text-align:center; font-size:10px">Copyright &copy; 2022 AP Photography Club</div></br>
</div></br>

</body>
</html>