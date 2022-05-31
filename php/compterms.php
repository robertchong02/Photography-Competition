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
<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif">


<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="editprofile.php">Profile</a>
  <a href="userhome.php">Winner</a>
  <a href="userhome.php">About Us</a>
    <a class="active" href="userhome.php">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">AP Photography Club</p>
</div>

<p style="margin-left:50px; margin-top:20px">
	<a href="userhome.php"><button type="button" class="button button1">HOME</button></a>
</p>
<br>
<br>
<br>
<div class="box1" style="background-color:#A7CAD7;text-align:center">
  <form name="compread2" method="get"  style=" padding-left:6px">
  <?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = ".$_GET['CompID']);
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
      $displayData = '
      <h2>Title: <input type="text" value = "'.$row["CompetitionTitle"].'" name="title" class="compread2" style="width:200px" readonly/></h2>
      <img src="data:image/jpg;base64, '.base64_encode($row["CompetitionImage"]).'" style="width:300px; height:300px; padding-top:10px ">
      <br>
      <br>

      <p> Theme: <input type="text" value = "'.$row["Theme"].'" name="theme"  class="compread2" readonly/></p>
      <p> Register Date: <input type="text" value = "'.$row["RegisterDate"].'" name="registerdate"  class="compread2" readonly/> </p>
      <p> Deadline: <input type="text" value = "'.$row["Deadline"].'" name="deadline" class="compread2" style="width:210px" readonly/></p>
      <p> Competition Date: <input type="text" value = "'.$row["CompetitionDate"].'" name="compdate" class="compread2" style="width:150px" readonly/></p>
      <p> Prize:   <textarea name = "prize" cols=40  rows=3 style="width: 80%;height: 90px;background: #f1f1f1;" readonly>'.$row["Prize"].'</textarea></p>
      <p> Eligibility: <input type="text" value = "'.$row["Eligibility"].'" name="eligibility"  class="compread2" readonly/></p> 
      ';
      echo $displayData;  
      }
  ?>
  </form>
  </div> 
    

  
  <div class="box2" style="background-color:#A7CAD7;height:977px">
    <div class="filebox">
      <p>Upload Content Here</p>
      <form method="POST" action="user_upload.php" enctype="multipart/form-data">
      <input type="file" name="image" style="width:40%;" accept="image/*" required>
      <br>
      <input style="width:95%;" type="text" placeholder="Enter your content title"  name="conTitle" required>
      <input style="width:95%;height:152px" type="text" placeholder="Enter short content description"  name="conDesc" required>
      <input style="width:95%;" type="text" placeholder="Enter your username" name="userName" required>
      <h6 style="margin-left:15px">*This Username will be displayed on the content page"</h6>


      <?php 
      echo '<input style="display:none;" type="text" name="CompID" value='.$_GET["CompID"]. '>';
      ?>
      <div style="margin-right:30px">
      <input style="margin-right:20px;background-color: #4CAF50;color:white;margin:auto; float:right" type="submit" value="Submit">
      </div>
      </form>
    </div>
  </div>

	  <!-- <button type="button" class="button button1 btn btn-primary joinButton" onclick="openPopup()" style="padding-bottom:35px">Join Competition</button>
            <div class = "popup" id="popup">
                <h2>Thank You!</h2>
                <p>Your content has been successfully submitted for verification.</p>
                <button type="button" onclick="closePopup()">OK</button>
                

            </div>    -->
<!-- <script>
// let popup = document.getElementById("popup");

// function openPopup(){
//     popup.classList.add("open-popup");
// }


// function closePopup(){

//     popup.classList.remove("open-popup");

//     //redirect 
//     window.location.href = "userhome.php";
// }
</script> -->

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