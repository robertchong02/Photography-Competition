<!DOCTYPE html>
<html>
<head>
  <!-- Link to CSS -->
  <link rel = "stylesheet" href = "../css/editprofile.css">
<title>Profile</title>
</head>

<body style="background-image:url('../image/bg1.png')">
<div class="topnav">
  <a href="#Logout">Logout</a>
  <a href="#Profile">Profile</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
    <a class="active" href="userhome.html">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>
<h2 style="text-align:center;">USER PROFILE</h2>	
<nav>
<div id="profile">
</div>
<div id="profiledata" style="background-color:#A7CAD7">
	<label for="Username"><b>Username</b></label>

    <input type="text" placeholder="Edit Username" name="Username">

	<label for="Fname"><b>Firstname (Not Editable)</b></label>

    <input type="text" placeholder="Firstname" name="Fname" readonly>

	<label for="Lname"><b>Lastname (Not Editable)</b></label>

    <input type="text" placeholder="Lastname" name="Lname" readonly>
	<label for="Gender"><b>Gender (Not Editable)</b></label>

    <input type="text" placeholder="Gender" name="Gender" readonly>

	<label for="Nationality"><b>Nationality (Not Editable)</b></label>

    <input type="text" placeholder="Nationality" name="Nationality" readonly>

	<label for="Date of Birth"><b>Date of Birth (Not Editable)</b></label>

    <input type="text" placeholder="Date of Birth" name="Date of Birth" readonly>

	<label for="Contact Number"><b>Contact Number</b></label>

    <input type="text" placeholder="Edit Contact Number" name="Contact Number">

	<label for="Email"><b>Email</b></label>

    <input type="text" placeholder="Edit Email" name="Email">

	<label for="Password"><b>Password</b></label>
    
    <input type="text" placeholder="Edit Password" name="Password">
</div>
</nav>
<nav>
<p align="left">
	<h2 style="text-align:left">Select photo:</h2>
    <input type="file" id="myfile" name="myfile" style="background-color:transparent">
</p>
<p align="right">
  <button class="button button2">Save</button>
</p>

</nav>
</body>
</html>