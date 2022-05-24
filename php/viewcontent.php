<?php
include("connect.php");
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
<body style="background-image:url('../image/bg1.png')">
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="editprofile.php">Profile</a>
  <a href="userhome.php">Winner</a>
  <a href="userhome.php">About Us</a>
    <a class="active" href="userhome.php">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>
<h2 style="text-align:center">POSTS</h2>
<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '8'");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
      $displayData = '
			<h2 style="text-align:center"><input type="text" value = "'.$row["CompetitionTitle"].'" name="title" size="30" maxlength="50" style="background-color:transparent;font-size:24px; text-align:center" readonly/></h2>	';
		echo $displayData;  
		}
?>	
<br>
<nav class="buttonbackground">
<p align="left">
  <a href="userhome.php"><button type="button" class="button button1">BACK</button></a>
</p>
<p align="right">
  <button class="button button2">NEXT</button>
</p>
</nav>

<form method="get" action="comment.php" style="margin:auto">
<nav class="content1 title" style="background-color:#A7CAD7;">

<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM verifycontent WHERE vcompetitionID = '8'");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
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
			<br>
			<label for="Participant"><b>Participant Name: </b><input type="text" value = "'.$row["ParticipantName"].'" name="name"  class="compread2" readonly/></label>
			<br>
			<form name="viewcomment" method="get" action="readcomment.php">
			<div style="padding-left:15px"><a href="readcomment.php">
				<button class="button button3">Read Comments</button>
			</a><br/></div>
			</form>
			<form name="viewcontent" method="get" action="comment.php" style="padding-left:200px; margin:auto">
			<div style="display:inline-block; float:right;" >
				<button type="submit" class="button button1" onclick="openPopup()">Vote</button>
				<div class = "popup" id="popup">
					<h2>Voted Successfully</h2>
					<p>Thanks for supporting</p>
					<button type="button" onclick="closePopup()">OK</button>
				</div>
				<input type ="submit"  value= "Comment" style="width:100px;margin-right:20px"/>	
				<input style="display:none;" type="text" name="vconID" value='.$row["vcontentID"].'>
			</div>
			</form>
		</div>
	</div>
</div>';
echo $displayData;  

	}
	?>

</nav>
</form>

<script>
let popup = document.getElementById("popup");

function openPopup(){
	popup.classList.add("open-popup");
}
function closePopup(){
	popup.classList.remove("open-popup");
}
</script>
</body>
</html>