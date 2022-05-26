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

<body style="background-image:url('../image/bg1.png')">


  <div class="topnav">
    <a href="logout.php">Logout</a>
    <a href="winnerannounce.php">Winner</a>
    <a class="active" href="adminhome.php">Home</a>
    <img class="logo" style="float: left;" src="../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>

  </div>
  <p style="margin-left:50px; margin-top:20px">
    <a href="competition.php">
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
    </form>
  </div>

</body>

</html>