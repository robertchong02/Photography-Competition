<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <p style="float: left;">AP Photography Club</p>
</div>
<h2 style="text-align:center">POST</h2>	
<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '8'");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
      $displayData = '
			<h2 style="text-align:center"><input type="text" value = "'.$row["CompetitionTitle"].'" name="title" size="30" maxlength="50" style="background-color:transparent;font-size:24px; text-align:center" readonly/></h2>';
		echo $displayData;  
		}
?>	
<br>
<nav class="buttonbackground">
<p align="left">
	<a href="viewcontent.php">
  		<button class="button button1">BACK</button>
  	</a>
</p>
</nav>

<nav class="content">
<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM verifycontent WHERE vcontentID = ".$_GET['vconID']);
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
      echo '<input style="display:none;" type="text" name="vconID" value='.$_GET["vconID"]. '>';
      $displayData = '
	<div id="contentpicture">
	<img src="data:image/jpg;base64, '.base64_encode($row["vcontentImage"]).'" style="width:100%; height:300px">
	</div>';
	echo $displayData;  
}
?>
	<br>
	<div id="contentcomment" style="margin-bottom:30px;background-color:#A7CAD7">
	<label for="comment"><b>Comment: </b></label>
	<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM contentcomment WHERE vcID = ".$_GET['vconID']);
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
      echo '<input style="display:none;" type="text" name="vconID" value='.$_GET["vconID"]. '>';
      $displayData = '
	
	<input type="text" value = "'.$row["contentcomment"].'" name="comment"  style="width:95%;height:10px;" readonly/>';
	echo $displayData;  
}
?>

	</div>	

</nav>

</body>
</html>