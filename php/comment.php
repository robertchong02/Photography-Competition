<?php
include("connect.php");
include("session.php");
$customerID = $_SESSION['Customer_ID'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Comment</title>
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
  <a style="float:left; position:relative; bottom:20px;"><img class="logo" src = "../image/logo.png"></a>
  <a style="font-family: Comic San; font-weight:bold; position:relative; right:10cm" >AP Photography Club</a>
</div>

<h2 style="text-align:center">CONTENT</h2>	
<h2 style="text-align:center">COMPETITION xxxxx </h2>	
<br>
<nav class="buttonbackground">
<p align="left">
	<a href="viewcontent.php">
  		<button type="button" class="button button1">BACK</button>
  	</a>
</p>
</nav>

<form name="comment" method="get"  style=" padding-left:6px">
<nav class="content" style="margin:30px; background-color:#A7CAD7;">
<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM verifycontent WHERE vcontentID = ".$_GET['vconID']);
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
      echo '<input style="display:none;" type="text" name="vconID" value='.$_GET["vconID"]. '>';
      $displayData = '
		<div id="contentpicture">
		<img src="data:image/jpg;base64, '.base64_encode($row["vcontentImage"]).'" style="width:100%; height:290px;">
		</div>
		<br>
		<div id="contentdescription" style="padding-bottom:300px">
		<label for="ContentTitle"><b>Content Title:</b><input type="text" value = "'.$row["vcontentTitle"].'" name="title" style="width:90%" readonly/></label>
		<br>
		<label for="Description"><b>Description: </b></label>
		<div style="padding-left:10px"><textarea name = "description" cols=40  rows=3 style="width: 80%;height: 90px;margin-top:15px;background: #f1f1f1" readonly>'.$row["vcontentDescription"].'</textarea></div>
		<label for="Participant"><b>Participant Name: </b><input type="text" value = "'.$row["ParticipantName"].'" name="name"  class="compread2" readonly/></label>
		<br>
		</div>
		';
	    echo $displayData;  
	}
	?>
		<br>

</nav>
</form>	

<div id="contentcomment" style="padding-bottom:5px; height:250px">
		<label for="comment"><b>Comment here: </b></label>
		<form action="addcomment.php" method="POST" >

	
	
		<input style="width:95%;height:100px;" type="text" placeholder="Comment here" name="comment">
		

		<?php
		echo '<input style = "display:none;" type = text name="vconID" value='.$_GET["vconID"].'>';
		?>

		<p align="center" style="margin-top:0px">
			<input type="submit" value="SUBMIT" style="background-color:green;color:white" >
		</p>
		</form>
</div>

<!-- footer -->
<div class="footer" style="font-size:14px; margin-top:1000px" >
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