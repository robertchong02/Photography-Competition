<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>
<style>
.admingrid-container {
  display: grid;
  grid-template-columns: auto auto;
  gap: 20px;
  background-color: #A7CAD7;
  padding: 10px;
  margin: 20px 20px 20px 20px;
}
.admingrid-item {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px 20px 20px 20px;
  font-size: 30px;
  text-align: center;
  display:block;
  margin:10px;
}
.functbtn{
    border:none;
    background-color:#de2843;
    color:white;
    font-size:20px;
    border-radius: 12px;
}

</style>
<head>
    <!-- Link to CSS -->
    <link rel = "stylesheet" href = "../css/main.css">
    <title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif;">
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="#Winner">Winner</a>
        <a class="active" href="adminhome.php">Home</a>
        <img class="logo" style="float: left" src="../image/logo.png" />
        <p style="float: left">AP Photography Club</p>
    </div>
    <br>
    <div style="text-align:center">
        <h1>Welcome to Admin Page</h1>
        <div class="col-4">
        </div>
    </div>
    <br>
    <div style="text-align:center"><h2>Functions</h2></div>
    <div class="admingrid-container">
        <div class="admingrid-item">
            <img  style="object-fit: contain;width:90%;height:90%" src="../image/photography.jpeg" />
            <br>
            <a href="adminaddcomp.php">
            <button type="button" class="functbtn">Add New Competition</button><br />
            </a>
        </div>
		

        <div class="admingrid-item">
            <img style="object-fit: contain;width:90%;height:90%" src="../image/verification.png" />
            <br>
            <a href="adminverifycontent.php">
            <button type="button" class="functbtn">Verify Content </button>
            </a>
        </div>
        <div class="admingrid-item">
            <img style="object-fit: contain;width:90%;height:90%" src="../image/report.png" />
            <br>
            <a href="admincompetition.php">
            <button type="button" class="functbtn">View Statistical Report</button><br />
            </a>
        </div>  
        <div class="admingrid-item">
            <img style="object-fit: contain;width:90%;height:90%" src="../image/winner.jpg" />
            <br>
            <a href="adminwinnerannounce.php">
            <button type="button" class="functbtn">Winner Announcement</button>
            </a>
        </div>
    </div>
    </div>
<br><br><br>
<h2 id="Winner" style="margin:25px; text-align:center;font-family:Franklin Gothic Medium;">Winner</h2>
<div class="title">
	<p style="text-align:center; font-size:24px">Winner for the latest competition:</p>
	<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM winner1 ORDER BY winnerID DESC LIMIT 1");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
		$displayData = '
			<div style="font-size:24px;font-weight:bold;padding-left:500px">
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
			<div style="display:inline-block;font-size:18px">
			<h3>1st Place Winner</h3>
			<img style="object-fit: contain;width:100%;height:300px" src="data:image/jpg;base64, '.base64_encode($row["wcontentImage"]).'"><br>
			<div style="text-align:center"><b>Content Title:</b> <input type="text" value = "'.$row["wcontentTitle"].'" name="ctitle" style="border:none;background-color:transparent" readonly/></div>
			<div style="padding-left:30px"><b>Participant Name:</b><input type="text" value = "'.$row["wname"].'" name="name" style="border:none;background-color:transparent" readonly/></div>
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
			<br><div style="padding-left:50px"><b>Content Title:</b> <input type="text" value = "'.$row["wcontentTitle"].'" name="ctitle" style="border:none;background-color:transparent" readonly/></div>
			<div style="padding-left:90px"><b>Participant Name:</b> <input type="text" value = "'.$row["wname"].'" name="name" style="border:none;background-color:transparent" readonly/></div>
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
			<div style="display:inline-block;text-align:center;font-size:18px">
			<h3>3rd Place Winner</h3>
			<img style="object-fit: contain;width:100%;height:300px" src="data:image/jpg;base64, '.base64_encode($row["wcontentImage"]).'">
			<br><div style="padding-left:40px"><b>Content Title:</b><input type="text" value = "'.$row["wcontentTitle"].'" name="ctitle" style="border:none;background-color:transparent" readonly/></div>
			<div style="padding-left:80px"><b>Participant Name:</b><input type="text" value = "'.$row["wname"].'" name="name" style="border:none;background-color:transparent" readonly/></div>
			</div>
			';
			echo $displayData;  
		}
		?>
	</div>
</div>
<br><br><br><br>

<h2 style="margin:25px; text-align:center;font-family:Franklin Gothic Medium;">About Us</h2>
<div class="title" style="text-align:justify; margin:25px;font-size:20px"> 
	<p>Founded in 2022 by Asia Pacific University student in University Photography Organisation is a leading global platform dedicated to the development and advancement of photographic culture. Our programming and competition initiatives provide valuable opportunities for artists working in photography and help broaden the conversation around their work. Through our fairs we play a key role in driving the growth of the contemporary art market for photo-based art and deepening audience engagement with the medium. </p>
	<p>Our value lies in the integrity of our expertise, our years of experience and the strength of our relationships with both individual photographers as well as our industry-leading partners around the world. Our objective is to let every student to have a platform to share their masterpiece of photography and gain their confident on photography skills plus give them an opportunity to share their experiences of photography techniques. So, competition is organized by the admin to know who has the most perfect skills of photography and winner will be announce at the end. Contact Us if you need enquires. So, what are you waiting for? </p>
	<br/><br/>
</div>
<br><br><br><br>

<!-- footer -->
<div class="footer column" style="font-size:14px" >
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left">
	<div style="padding-top:20px"> 
		<img class="logo" style="width:120px; height:100px" src = "../image/logo.png"></br></br>
	</div>
	<div>
		<p><b>Asia Pacific University</b></p>
		Jalan Teknologi 5, </br>
		Taman Teknologi Malaysia,</br>
		57000 Kuala Lumpur,</br>
		Wilayah Persekutuan Kuala Lumpur.
	</div>
	</div></br>
	<div>
		<p style="text-align:center">Kindly click <a href="https://web.whatsapp.com/">here</a> to contact with users.</p>
	</div>
	<div style="text-align:center; font-size:10px">Copyright &copy; 2022 AP Photography Club</div></br>
</div></br>

</body>

</html>