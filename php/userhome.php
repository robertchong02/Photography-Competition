<<<<<<< HEAD
﻿
=======
﻿<?php
    include("connect.php");
?>
>>>>>>> fc4d06bcee0b80e616d767336ae7bb9369843351
<!DOCTYPE html>
<html>

<head>
  <!-- Link to CSS -->
  <link rel = "stylesheet" href = "../css/main.css">
<title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>


<body style="background-image:url('../image/bg.gif')">
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="editprofile.html">Profile</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
    <a class="active" href="userhome.html">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>

<div style="text-align:right; margin-right:30px">
<a href="email.html">  
	<button type="button" class="btn btn-primary">Notifications</button>  
</a></div>
<h2 id="home" style="margin:25px; text-align:center">Welcome!</h2>
<div class="flex-container" style="margin-left:30px">
	<div class=title style="width:800px; height:350px; font-size:16px; margin:auto; margin-top:18px">
	<form name="login" method="get"  style=" padding-left:6px">
		<table>
		<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '6'");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
		$displayData = '
		<tr>
		<td rowspan="11">			
		<img src="data:image/jpg;base64, '.base64_encode($row["CompetitionImage"]).'" style="width:300px; height:300px; padding-top:10px ">
		</td>
		<td></td>
		<td colspan="3"style="font-size:20px; padding-top:10px;padding-left:15px"><b>Open for Registration!!!</b><br/></td>
		</tr>
		<tr><td></td></tr>
		<tr>
			<td></td>
			<td style="text-align:left;padding-left:15px">Title</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["CompetitionTitle"].'" name="title" size="37" maxlength="50" style="height:50px" readonly/></td>
		</tr>
		<tr>
			<td></td>
			<td style="text-align:left;padding-left:15px">Theme</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["Theme"].'" name="theme" size="37" maxlength="30" readonly/></td>
		</tr>
		<tr>
			<td></td>
			<td style="text-align:left;padding-left:15px">Register Date</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["RegisterDate"].'" name="registerdate" size="37" maxlength="15" readonly/></td>
		</tr>
		<tr>
			<td></td>
			<td style="text-align:left;padding-left:15px">Deadline</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["Deadline"].'" name="deadline" size="37" maxlength="15" readonly/></td>
		</tr>
		<tr>
			<td></td>
			<td style="text-align:left;padding-left:15px">Competition Date</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["CompetitionDate"].'" name="compdate" size="37" maxlength="15" readonly/></td>
		</tr>
		<tr>
			<td></td>
			<td style="text-align:left;padding-left:15px">Prize</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["Prize"].'" name="prize" size="37" maxlength="8" readonly/></td>
		</tr>
		<tr>
			<td></td>
			<td style="text-align:left;padding-left:15px">Eligibility</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["Eligibility"].'" name="eligibility" size="37" maxlength="8" readonly/></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="3" style="padding-left:15px">
				<a href="compread2.html">Click here for more information...</a>
			</td>
		</tr>';
		echo $displayData;  
	}
	?>	
		</table>
		
	</form>
	</div>

<div style="font-size:16px; margin:auto">
	<div style="padding-bottom:0px">
		<div class="title" style="text-align:center; width:300px; height:150px; margin-left:33px">
			<b style="font-size:17px">Competition 2 (Closed)</b><br/><br/>
			<a href="viewcotent.html">
				<button type="button" class="btn btn-primary">Click Here to Vote</button>
			</a>
		</div>
	</div>

	<div >
		<div class="title" style="text-align:center; margin:33px;width:300px; height:150px; padding-top:50px">
			<p>More Competitions...</p><br/><br/>
		</div><br/>
	</div>
</div>
</div>

<h2 id="Winner" style="margin:25px; text-align:center">Winner</h2>
<div class="title">
	<p style="text-align:center; font-size:24px">Winner for the latest competition:</p>
	<div class="grid-container1" style="padding-left:80px">
		<div class="title" style="width:150px; height:150px"></div>
		<div class="title" style="width:150px; height:150px"></div>
		<div class="title" style="width:150px; height:150px"></div>
	</div>
	<div class="grid-container2"> 	
		<img alt="" src="../image/1st.png" width="40px" height="60px" style="padding-left:140px"/>
		<img alt="" src="../image/2nd.png" width="40px" height="60px" style="padding-left:120px"/>
		<img alt="" src="../image/3rd.png" width="40px" height="60px" style="padding-left:100px"/>
	</div>
	<div class="grid-container2" style="padding-left:80px">
		<p>Name:</p>
		<p>Name:</p>
		<p>Name:</p>
	</div>
</div><br/><vr/>

<h2 id="About" style="margin:25px; text-align:center">About Us</h2>
<div class="title" style="text-align:justify; margin:25px"> 
	<p>AP Photo is a platform that allows all the Asia Pacific University Student to show their knowledge and skills of photography by sharing their photo content that they have taken. Competition is organized by the admin to know who has the most perfect skills of photography and winner will be announce at the end. Contact Us if you need enquires. </p>
</div>

<p style="text-align:center">Contact us by clicking
<a href="https://api.whatsapp.com/send?phone=60163543712&text=Hello,%20I%20have%20questions%20regarding%20the%20AP%20Photo%20Competition%20%3E.%3C">here</a>
</p>

	
</body>

</html>