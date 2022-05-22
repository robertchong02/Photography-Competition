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
<body style="background-image:url('../image/bg1.png')">


<div class="topnav">
  <a href="#Logout">Logout</a>
  <a href="editprofile.html">Profile</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
    <a class="active" href="userhome.html">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>

<p style="margin-left:50px; margin-top:20px">
	<a href="compread2.html"><button type="button" class="button button1">BACK</button></a>
</p>
<br>
<br>
<br>
  <div class="box1" style="background-color:#A7CAD7; margin-bottom:30px">
    <h3> Competition 1 (Title) </h3>
    <img src = "image_test.jpg">
    <br>
    <br>
    <p> Theme: <input style="width:fit-content;" type="text" placeholder="Theme" name="theme" readonly></p>
    <p> Register Date: <input style="width:fit-content" type="text" placeholder="Register Date" name="rdate" readonly> </p>
    <p> Deadline: <input style="width:fit-content" type="text" placeholder="Deadline" name="deadline" readonly></p>
    <p> Competition Date: <input style="width:fit-content" type="text" placeholder="Competition Date" name="cdate" readonly></p>
    <p> Prize: <input style="width:fit-content" type="text" placeholder="Prize" name="prize" readonly></p>
    <p> Eligibility: <input style="width:fit-content" type="text" placeholder="Eligibility" name="eligibility" readonly></p>

  </div> 
  <div class="box2" style="background-color:#A7CAD7">
    <div class="filebox">
    <p>Upload Content Here</p>
    <form action="user_upload.php" method="POST">
  	<input type="file" id="myFile" name="filename" style="width:40%;">
    <br>
    <input style="width:95%;" type="text" placeholder="Enter your content title" id="cont_title" name="conTitle">
    <input style="width:95%;height:100px" type="text" placeholder="Enter short content description" id="cont_desc" name="conDesc">
    <input style="width:95%;" type="text" placeholder="Enter your username" id="cont_title" name="userName">
    <h6 style="margin-left:15px">*This Username will be displayed on the content page"</h6>
	  <button type="button" class="button button1 btn btn-primary joinButton" onclick="openPopup()" style="padding-bottom:35px">Join Competition</button>
            <div class = "popup" id="popup">
                <h2>Thank You!</h2>
                <p>Your content has been successfully submitted for verification.</p>
                <button type="button" onclick="closePopup()">OK</button>
            </div>
    </form>
    </div>
  </div>
   
<script>
let popup = document.getElementById("popup");

function openPopup(){
    popup.classList.add("open-popup");
}


function closePopup(){

    popup.classList.remove("open-popup");

    //redirect 
    window.location.href = "userhome.php";
}
</script>

</body>
</html>