<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link ref="stylesheet" href="../css/default.css">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/default.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url('../image/bg1.png')">
<div class="topnav">
  <a href="signup.html">Sign Up</a>
  <a href="#Login">Login</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
    <a class="active" href="main.html">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>

<div class="title" style="background-color:#A7CAD7; width:600px; text-align:center;margin:auto">
<h2 id="Login">Login</h2><br/><br/>
<form name="login" method="POST" action="login.php">
	Username:
	<input type="text" name="username2" size="20" maxlength="8"/><br/><br/>
	Password:	
	<input type="password" name="pw2" size="20" maxlength="16"/><br/><br/>
	<a href="forgetpassword.html" style="font-size:15px">Forgot password?</a>
	<br>
	<input style="width:50%" type="submit" value="Log In as User">
	<br>


	<!-- <input style="width:50%" type="submit" value="Log In as Admin">
	<br>
	<input style="width:50%" type="submit" value="Sign Up as New Member"> -->
</form><br/><br/>

<!-- <a href="userhome.html">  
	<button type="button" class="btn btn-primary">Log In as User</button> 
</a><br/><br/> -->
<a href="adminlogin.php">  
	<button type="button" class="btn btn-primary">Login as Admin</button>  
</a><br/><br/>
<a href="signup.html">  
	<button type="button" class="btn btn-primary">Sign Up as New Member</button>  
</a>
</div>


</body>

</html>