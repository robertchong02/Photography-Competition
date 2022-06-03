<?php
include("connect.php");
include("adminsession.php");
$AdminID = $_SESSION['adminID'];
?>

<!DOCTYPE html>
<html>

<head>
  <!--Link to CSS-->
  <link rel = "stylesheet" href = "../css/adminaddcomp.css">

  <!--Link to picture-->
  <link rel = "icon" type = image/png href ="../image/logo.png">
  <title>Add competition</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/adminaddcomp.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif">

<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="adminhome.php">Winner</a>
  <a class="active" href="adminhome.php">Home</a>
  <a style="float:left; position:relative; bottom:20px;"><img class="logo" src = "../image/logo.png"></a>
  <a style="font-family: Comic San; font-weight:bold; position:relative; right:10cm" >AP Photography Club</a>
</div>

  <p style="margin-left:50px; margin-top:20px">
    <a href="adminhome.php">
      <button type="button" class="button button1">BACK</button>
    </a>
  </p>
  <br>
  <br>
  <h2 style="text-align:center">Add New Competition<h2>
  <br>
  <div class="add-comp-form">
    <form method="POST" action="addcomp.php" enctype="multipart/form-data">
      <div class="box1" style="background-color:#A7CAD7; ">
        <input type="text" placeholder="Enter Title Here" name="title" required>
        <input type="file" name="image" accept="image/*" required>
        <h3> Upload Image Above</h3>
        <br>
        <input type="text" placeholder="Theme" name="theme" required>
        <input type="text" placeholder="Register Date" name="rdate" required>
        <input type="text" placeholder="Deadline" name="deadline" required>
        <input type="text" placeholder="Competition Date" name="cdate" required>
        <input type="text" placeholder="Prize" name="prize" required>
        <input type="text" placeholder="Eligibility" name="eligibility" required>

      </div>
      <div class="box2" style="background-color:#A7CAD7; margin-bottom:30px">
        <h3> Description </h3>
        <textarea name="description" placeholder="Max: 432 words" required rows="10" cols="100"></textarea>
        <br>
        <h3> Guideline </h3>
        <textarea name="guideline" placeholder="Max: 432 words" required rows="10" cols="100"></textarea>
        <div class="post-container">
          <input type="submit" value="Post Competition">
        </div>
      </div>
    </form>
  </div>

<!-- footer -->
<div class="footer" style="font-size:14px; margin-top:1000px" >
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left">
	<div style="padding-top:20px"> 
		<img class="logo" style="width:120px; height:100px" src = "../image/logo.png"></br></br>
	</div>
	<div>
		<p><b>Asia Pacific University</b></p>
		Jalan Teknologi 5, </br>
		Taman Teknologi Malaysia,</br>
		57000 Kuala Lumpur,</br>
		Wilayah Persekutuan Kuala Lumpur.
	</div>
	</div></br>
	<div>
    <p style="text-align:center">Kindly click <a href="https://web.whatsapp.com/">here</a> to contact with users.</p>
	</div>
	<div style="text-align:center; font-size:10px">Copyright &copy; 2022 AP Photography Club</div></br>
</div>

</body>

</html>