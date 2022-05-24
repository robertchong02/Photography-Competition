<!DOCTYPE html>
<html>

<head>
  <!--Link to CSS-->
  <link rel = "stylesheet" href = "../css/signup.css">
<title>Sign up</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-image:url('../image/bg1.png')">
<div class="topnav">
    <a href="#Sign Up">Sign Up</a>
    <a href="userlogin.php">Login</a>
    <a href="main.php">Winner</a>
    <a href="main.php">About Us</a>
    <a class="active" href="main.php">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>

<div class="title" style="background-color:#A7CAD7"><h2 id="Sign Up" >Sign Up</h2><br/>
    <form method="POST" action="signup.php">
    <table>
    <tr>
		<td style="text-align:left">First Name</td>
 		<td>:</td>
 		<td><input type="text" name="firstname" size="20" maxlength="15"/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Last Name</td>
 		<td>:</td>
 		<td><input type="text" name="lastname" size="20" maxlength="15"/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Username</td>
 		<td>:</td>
 		<td><input type="text" name="username" size="20" maxlength="15"/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Email</td>
 		<td>:</td>
 		<td><input type="email" id="email" size="20" name="email"/></td>
	</tr>
 	<tr>
 		<td style="text-align:left">Contact Number</td>
 		<td>:</td>
 		<td><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Gender</td>
 		<td>:</td>
 		<td>	<input type="radio" name="gender" value="M"/>Male
 				<input type="radio" name="gender" value="F"/>Female
 		</td>
	</tr>
 	<tr>
 		<td style="text-align:left">Date of Birth</td>
 		<td>:</td>
 		<td><input type="date" id="dob" name="dob"/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Nationality</td>
 		<td>:</td>
 		<td><input type="text" name="nationality" size="20" maxlength="15"/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Password</td>
 		<td>:</td>
 		<td><input type="text" name="password" size="20" maxlength="15"/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Confirm Password</td>
 		<td>:</td>
 		<td><input type="text" name="confirmpassword" size="20" maxlength="15"/></td>
 	</tr>
 		<td></td>
 	<tr></tr>
 	</table>
    <input type="submit" value="Sign Up">
    </form><br/><br/>

<!-- <button type="button" class="button button1 btn btn-primary">Sign Up</button>
            <div class = "popup" id="popup">
                <h2>Signed Up Successfully</h2>
                <p>Please click on "Login as User" to login to your account.</p>
                <button type="button" onclick="closePopup()">OK</button>
            </div><br/><br/>
            
<a href="login.html">  
    <button type="button" class="btn btn-primary">Login as User</button>  
</a> -->


</div>


</body>
</html>