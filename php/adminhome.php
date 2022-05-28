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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body style="background-image:url('../image/bg1.png')">
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="adminwinnerannounce.php">Winner</a>
        <a class="active" href="adminhome.php">Home</a>
        <img class="logo" style="float: left" src="../image/logo.png" />
        <p style="float: left">AP Photography Club</p>
    </div>
    <br>
    <div style="text-align:center">
        <h1>Welcome, &lt;Admin&gt;</h1>
        <div class="col-4">
        </div>
    </div>

    <div class="container" class="title2" style="background-color:#A7CAD7; border:solid 2px #A7CAD7">
        <div class="row">
            <div class="col">
                <h2>Function</h2>
                <div class="row">
                    <div class="col align-self-start">
                        <div class="Functions">
                        <a href="admincompetition.php">
                        	<button type="button" class="btn btn-danger">All Competition</button><br />
                        </a>
                        <a href="adminreport.php">
                            <button type="button" class="btn btn-danger mt-3">View Statistical Report</button><br />
                        </a>
                        <a href="adminemail.html">
                            <button type="button" class="btn btn-danger mt-3">Send Notification</button><br />
                        </a>
                        <a href="adminverifycontent.php">
                        <button type="button" class="btn btn-danger mt-3">Verify Content </button>
                        </a>
                        <a href="adminwinnerannounce.php">
                            <button type="button" class="btn btn-danger mt-3">Winner Announcement</button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<h2 id="Winner" style="margin:25px; text-align:center">Winner</h2>
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
</body>

</html>