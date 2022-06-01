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
<h2 style="text-align:center">User Records<h2>
<br>

<form action="search.php" method="GET">
    <div class="flex-container">
	<input type="text" style="width:50%;border:1px solid grey" placeholder="Search using username" name="query" />
	<input type="submit" style="width:20%;border:1px solid grey"  value="Search" />
    </div>
</form>

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