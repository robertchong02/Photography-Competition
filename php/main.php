<?php
    include("connect.php");
	
?>

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
  <a href="usersignup.php">Sign Up</a>
  <a href="userlogin.php">Login</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
    <a class="active" href="main.php">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Club</p>
</div>

<h2 id="home" style="margin:25px; text-align:center">Home</h2>
<img style="object-fit: contain;width:100%;height:100%" src = "../image/home.png">
<div class=title style="font-size:16px; margin:auto; margin-top:18px; margin:25px">
	<form name="login" method="get" action="compread2.php" style="padding-left:200px; margin:auto">
		<table>
		<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '9'");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
		$displayData = '
		<tr>
		<td rowspan="11">			
		<img src="data:image/jpg;base64, '.base64_encode($row["CompetitionImage"]).'" style="object-fit: contain;width:500px; height:600px; padding-top:10px;padding-right:25px ">
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
				<br>
				<a href="userlogin.php"><button type="button" class="btn btn-primary">Login for more information</button></a>
			</td>
		</tr>';
		echo $displayData;  
	}
	?>	
		</table>

	</form>
	</div>



	<div style="padding-right:10px; margin:auto">
		<div class="title" style="text-align:center; height:150px">
		<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '8'");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
		$displayData = '
			<input type="text" value = "'.$row["CompetitionTitle"].'" name="title" size="30" maxlength="50" style="height:50px;border:none;background-color:#A7CAD7;" readonly/>
			<b style="font-size:17px">(Closed)</b><br/><br/>
			<a href="userlogin.php">
				<button type="button" class="btn btn-primary">Click Here to Vote</button>
			</a>';
			echo $displayData;  
		}
		?>	
		</div>
	</div>

	<div style="padding-right:10px; margin:auto" >
		<div class="title" style="text-align:center;height:80px; padding-top:20px">
		<a href="userlogin.php">
				<button type="button" class="btn btn-primary">More Competitions</button>
			</a>
		</div>
	</div>



	<h2 id="Winner" style="margin:25px; text-align:center">Winner</h2>
<div class="title">
	<p style="text-align:center; font-size:24px">Winner for the latest competition:</p>
	<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM winner1 ORDER BY winnerID DESC LIMIT 1");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
		$displayData = '
			<div style="text-align:center;font-size:24px;font-weight:bold">
			<u>Competition Title: <input type="text" value = "'.$row["wcompTitle"].'" name="title" style="border:none;background-color:transparent;font-weight: bold;text-decoration: underline;" readonly/>
			</u></div><br>
			';
			echo $displayData;  
		}
		?>
	<div style="display:flex;justify-content:space-around;text-align:center">
	<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM `winner1` ORDER BY winnerID DESC LIMIT 1");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
		$displayData = '
			<div style="display:inline-block;text-align:center;font-size:18px">
			<h3>1st Place Winner</h3>
			<img style="object-fit: contain;width:100%;height:300px" src="data:image/jpg;base64, '.base64_encode($row["wcontentImage"]).'"><br>
			Content Title: <input type="text" value = "'.$row["wcontentTitle"].'" name="ctitle" style="border:none;background-color:transparent" readonly/><br>
			Participant Name: <input type="text" value = "'.$row["wname"].'" name="name" style="border:none;background-color:transparent" readonly/>
			</div>
			';
			echo $displayData;  
		}
		?>
			
	<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM `winner2` ORDER BY winnerID DESC LIMIT 1");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
		$displayData = '
			<div style="display:inline-block;text-align:center;font-size:18px;">
			<h3>2nd Place Winner</h3>
			<img style="object-fit: contain;width:100%;height:300px"src="data:image/jpg;base64, '.base64_encode($row["wcontentImage"]).'">
			<br>Content Title: <input type="text" value = "'.$row["wcontentTitle"].'" name="ctitle" style="border:none;background-color:transparent" readonly/>
			<br>Participant Name: <input type="text" value = "'.$row["wname"].'" name="name" style="border:none;background-color:transparent" readonly/>
			</div>
			';
			echo $displayData;  
		}
		?>

	<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM `winner3` ORDER BY winnerID DESC LIMIT 1");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
		$displayData = '
			<div style="display:inline-block;text-align:center;font-size:18px;">
			<h3>3rd Place Winner</h3>
			<img style="object-fit: contain;width:100%;height:300px" src="data:image/jpg;base64, '.base64_encode($row["wcontentImage"]).'">
			<br>Content Title: <input type="text" value = "'.$row["wcontentTitle"].'" name="ctitle" style="border:none;background-color:transparent" readonly/>
			<br>Participant Name: <input type="text" value = "'.$row["wname"].'" name="name" style="border:none;background-color:transparent" readonly/>
			</div>
			';
			echo $displayData;  
		}
		?>
	</div>
</div><br/><vr/>

<h2 id="About" style="margin:25px; text-align:center">About Us</h2>
<div class="title" style="text-align:justify; margin:25px"> 
	<p>Founded in 2022 by Asia Pacific University student in University Photography Organisation is a leading global platform dedicated to the development and advancement of photographic culture. Our programming and competition initiatives provide valuable opportunities for artists working in photography and help broaden the conversation around their work. Through our fairs we play a key role in driving the growth of the contemporary art market for photo-based art and deepening audience engagement with the medium. </p>
	<p>Our value lies in the integrity of our expertise, our years of experience and the strength of our relationships with both individual photographers as well as our industry-leading partners around the world. Our objective is to let every student to have a platform to share their masterpiece of photography and gain their confident on photography skills plus give them an opportunity to share their experiences of photography techniques. So, competition is organized by the admin to know who has the most perfect skills of photography and winner will be announce at the end. Contact Us if you need enquires. So, what are you waiting for??? </p>
	<br/><br/>
	<p style="text-align:center; font-size:20px">LOGIN and JOIN US NOW!!</p>
</div>

<p style="text-align:center">Contact us by clicking
<a href="https://api.whatsapp.com/send?phone=60163543712&text=Hello,%20I%20have%20questions%20regarding%20the%20AP%20Photo%20Competition%20%3E.%3C">here</a>
</p>

	
</body>

</html>