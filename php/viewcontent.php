<?php
include("connect.php");
include("session.php");
$customerID = $_SESSION['Customer_ID'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Content</title>
<style>
.popup{
	width:400px;
	background: #C4D9FE;
	border-radius:6px;
	border:5px solid;
	position: absolute;
	top:0;
	left:50%;
	transform:translate(-50%,-50%)scale(0.1);
	text-align:center;
	padding: 0 30px 30px;
	color:#333;
	visibility:hidden;
	transition: transform 0.4s,top 0.4s;
}
.popup h2{
	font-size:38px;
	font-weight:500;
	margin: 30px 30px;
}
.popup button{
	width:100%;
	margin-top:50px;
	padding: 10px 0;
	background: #6fd649;
	color: #fff;
	border: 0;
	outline: none;
	font-size: 18px;
	border-radius:4px;
	cursor: pointer;
	box-shadow: 0 5px 5px rgba(0,0,0,0.2);
}
.open-popup{
	visibility:visible;
	position:fixed;
	left:50%;
	top:50%;
	transform:translate(-50%,-50%)scale(1);
}
</style>
<link href="../css/default.css" rel="stylesheet" type="text/css">
</head>
<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif;">
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="editprofile.php">Profile</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
  <a class="active" href="main.php">Home</a>
  <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">AP Photography Club</p>
</div>
<h2 style="text-align:center">POSTS</h2>
<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition ORDER BY CompetitionID ASC LIMIT 1");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
      $displayData = '
			<h2 style="text-align:center"><input type="text" value = "'.$row["CompetitionTitle"].'" name="title" size="30" maxlength="60" style="background-color:transparent;font-size:24px; text-align:center" readonly/></h2>';
		echo $displayData;  
		}
?>	
<br>
<nav class="buttonbackground">
<p align="left">
  <a href="userhome.php"><button type="button" class="button button1">BACK</button></a>
</p>
</nav>

<!-- <form method="get" action="comment.php" style="margin:auto"> -->
<nav class="content1 title" style="background-color:#A7CAD7;">
<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM verifycontent WHERE vcompetitionID = ".$_GET['CompID']);
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{
			echo '<input style="display:none;" type="text" name="CompID" value='.$_GET["CompID"]. '>';		
			
      $displayData = '
	  
<div class="flex-container">
	<div style="padding-top:80px">
		<div id="contentpicture1">
		<img src="data:image/jpg;base64, '.base64_encode($row["vcontentImage"]).'" style="max-width:100%; height:250px">
		</div>
	</div>

	<div>
		<div id="contentdescription1" style="width:600px; height:420px">
			
			<label for="ContentTitle"><b>Content Title:</b><input type="text" value = "'.$row["vcontentTitle"].'" name="title"  class="compread2" style="width:300px" readonly/></label>
			<br>
			<label for="Description"><b>Description: </b></label>
			<div style="padding-left:10px"><textarea name = "description" cols=40  rows=3 style="width: 80%;height: 90px;margin-top:15px;background: #f1f1f1" readonly>'.$row["vcontentDescription"].'</textarea></div>
			<label for="Participant"><b>Participant Name: </b><input type="text" value = "'.$row["ParticipantName"].'" name="name"  class="compread2" readonly/></label>
			
	
			<form name="viewcomment" method="get" action="readcomment.php">

				<input type ="submit" value= "Read Comments" style="width:540px;background-color:#AFB4A4;cursor: pointer;"/>	
				<input style="display:none;" type="text" name="vconID" value='.$row["vcontentID"].'>
				<input style="display:none;" type="text" name="vcompetitionID" value='.$row["vcompetitionID"].'>

			</form>

			<form name="viewcontent" method="get" action="vote.php" style="padding-left:200px; margin:auto">
			<div style="display:inline-block; float:right;">
				<input class = "button button1" type ="submit"  value= "Vote" name="vote" style="width:100px;margin-right:20px"/>		
				<input style="display:none;" type="text" name="vconID" value='.$row["vcontentID"].'>
				<input style="display:none;" type="text" name="vcompetitionID" value='.$row["vcompetitionID"].'>
				
			</div>
			</form>
		</div>
	</div>
</div>';
echo $displayData;  

	}
	?>
</nav>
<!-- </form> -->
<!-- <form name="comment" method="get" action="comment.php" style="padding-left:200px; margin:auto">
			<div style="display:inline-block; float:right;">		
				<input class = "button button1" type ="submit"  value= "Comment" name="comment" style="width:100px;margin-right:20px"/>	
				<input style="display:none;" type="text" name="vconID" value='.$row["vcontentID"].'>
				<input style="display:none;" type="text" name="vcompetitionID" value='.$row["vcompetitionID"].'>
				
			</div>
			</form> -->
<script>
let popup = document.getElementById("popup");

function openPopup(){
	popup.classList.add("open-popup");
}
function closePopup(){
	popup.classList.remove("open-popup");
}
</script>

<!-- footer -->
<div class="footer column" style="font-size:14px" >
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