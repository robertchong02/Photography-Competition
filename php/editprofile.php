<?php
include("connect.php");
include("session.php");
$customerID = $_SESSION['Customer_ID'];

?>

<!DOCTYPE html>
<html>
<head>
  <!-- Link to CSS -->
  <link rel = "stylesheet" href = "../css/editprofile.css">
<title>Profile</title>
</head>

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif">
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="editprofile.php">Profile</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
  <a class="active" href="userhome.php">Home</a>
  <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">AP Photography Club</p>
</div>
<h2 style="text-align:center;">USER PROFILE</h2>	
<nav>
<!-- <div id="profile">
</div> -->
<div id="profiledata" style="background-color:#A7CAD7; margin:auto">
<form action="update.php?ID=<?php echo $customerID?>" method = "POST">
<?php
    $getCustomerInfo = mysqli_query($con, "SELECT * FROM user WHERE Customer_ID = '$customerID';");
    while ($row = mysqli_fetch_assoc($getCustomerInfo))
    {

    $displayData ='
    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Edit Username" name="Username" value = "'.$row["Username"].'">

    <label for="Fname"><b>Firstname (Not Editable)</b></label>
    <input type="text" placeholder="Firstname" name="Fname" readonly value = "'.$row["Fname"].'">

    <label for="Lname"><b>Lastname (Not Editable)</b></label>
    <input type="text" placeholder="Lastname" name="Lname" readonly value = "'.$row["Lname"].'">

    <label for="Gender"><b>Gender (Not Editable)</b></label>
    <input type="text" placeholder="Gender" name="Gender" readonly value = "'.$row["Gender"].'">

    <label for="Nationality"><b>Nationality (Not Editable)</b></label>
    <input type="text" placeholder="Nationality" name="Nationality" readonly value = "'.$row["Nationality"].'">

    <label for="Date of Birth"><b>Date of Birth (Not Editable)</b></label>
    <input type="text" placeholder="Date of Birth" name="Date of Birth" readonly value = "'.$row["DoB"].'">

    <label for="Contact Number"><b>Contact Number</b></label>
    <input type="tel" placeholder="Contact Number" name="Contact_Number" pattern="[0-9]{3}-[0-9]{7}" value = "'.$row["ContactNumber"].'">

    <label for="Email"><b>Email (Not Editable)</b></label>
    <input type="text" placeholder="Edit Email" name="Email" readonly value = "'.$row["Email"].'">

    <label for="Password"><b>Password</b></label>
    <input type="text" placeholder="Edit Password" name="Password" value = "'.$row["Password"].'">
  
    <input class = "button button2" type ="submit" value = "Save" name = "Update"> 
    ';

    echo $displayData;
    }

?>
</form>
</div>
</nav>
<!-- <nav>
<p align="left">
	<h2 style="text-align:left">Select photo:</h2>
    <input type="file" id="myfile" name="myfile" style="background-color:transparent">
</p> 
</nav>-->
<!-- footer -->
<div class="footer" style="margin-top:100px" >
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left">
	<div style="padding-top:20px"> 
		<img class="logo" style="width:120px; height:100px" src = "../image/logo.png"></br></br>
	</div>
	<div style="font-size:14px; padding-bottom:40px">
		<p><b style="font-size:14px">Asia Pacific University</b></p>
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