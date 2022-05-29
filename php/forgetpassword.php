<!DOCTYPE html>
<html>
<head>
<title>Forgot password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/default.css" rel="stylesheet" type="text/css">
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
</head>


<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif;">
<div class="topnav">
  <a href="usersignup.php">Sign Up</a>
  <a href="userlogin.php">Login</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
    <a class="active" href="#home">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">AP Photography Club</p>
</div>

<p style="margin-left:50px; margin-top:20px">
<a href="userlogin.php" >
	<button type="button" class="button button1">BACK</button>
</a></p>

<div class="title" style="width:500px; text-align:center;margin:auto">
	<img alt="" src="../image/reset.png" width="80px" height="80px">
	<h2>Reset Password</h2>
	<button type="submit" class="button button1" onclick="openPopup()">Gmail</button>
	<div class = "popup" id="popup">
    	<h2>Password Changed!</h2>
        <p>Recovery password is successfully send to your Gmail account.</p>
        <button type="button" onclick="closePopup()">OK</button>
    </div><br/><br/>
    <p>A password change verification will send to your Gmail account.</p>
</div>

<script>
let popup = document.getElementById("popup");

function openPopup(){
    popup.classList.add("open-popup");
}
function closePopup(){
    popup.classList.remove("open-popup");
}

</script>

<!-- footer -->
<div class="footer" style="margin-top:100px">
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left">
	<div style="padding-top:20px"> 
		<img class="logo" style="width:120px; height:100px" src = "../image/logo.png"></br></br>
	</div>
	<div style="font-size:14px" >
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
