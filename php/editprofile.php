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

<body style="background-image:url('../image/bg1.png')">
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="#Profile">Profile</a>
  <a href="userhome.php">Winner</a>
  <a href="userhome.php">About Us</a>
    <a class="active" href="userhome.php">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>
<h2 style="text-align:center;">USER PROFILE</h2>	
<nav>
<!-- <div id="profile">
</div> -->
<div id="profiledata" style="background-color:#A7CAD7; margin-left:300px; margin-bottom:30px">
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
</p> -->


</nav>
</body>
</html>