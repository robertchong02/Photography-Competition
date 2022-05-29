<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="stylesheet" href="../css/default.css">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/default.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif">
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="#Winner">Winner</a>
  <a class="active" href="adminhome.php">Home</a>
  <a style="float:left; position:relative; bottom:20px;"><img class="logo" src = "../image/logo.png"></a>
  <a style="font-family: Comic San; font-weight:bold; position:relative; right:16cm" >AP Photography Club</a>
</div><br/><br/>


<div class="title" style="background-color:#A7CAD7; width:600px; text-align:center; margin:auto">
<h2 id="Login">Admin Login</h2><br/><br/>
<form name="login" method="POST" action="admin.php">
	Admin ID:
	<input type="text" name="adminName" size="20" maxlength="8"/><br/><br/>
	Password:	
	<input type="password" name="adminPassword" size="20" maxlength="16"/><br/><br/>
	<a href="forgetpassword.html" style="font-size:15px">Forgot password?</a>
	<br>
	<input style="width:50%" type="submit" value="Log In as Admin">
	<br>
</form><br/><br/>

<a href="userlogin.php">  
	<button type="button" class="btn btn-primary">Back</button>  
</a><br/><br/>
</div><br/><br/>

<!-- footer -->
<div class="footer" style="font-size:14px" >
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left;font-size:14px">
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
	</div>
	<div>
		<p style="text-align:center">Contact us by clicking
		<a href="https://api.whatsapp.com/send?phone=60163543712&text=Hello,%20I%20have%20questions%20regarding%20the%20AP%20Photo%20Competition%20%3E.%3C">here</a>
		</p>
	</div>
	<div style="text-align:center; font-size:10px">Copyright &copy; 2022 AP Photography Club</div></br>
</div></br>

</body>

</html>