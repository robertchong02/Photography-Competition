<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Winner announcement</title>
    <link rel = "stylesheet" href = "../css/main.css">
    <link rel = "stylesheet" href = "../css/winner.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winner Announcement</title>
</head>

<body style="background-image:url('../image/bg1.png')">

    <!--上栏-->
    
        <!--头部栏-->
        <div class="topnav">
            <a href="logout.php">Logout</a>
            <a href="winnerannounce.php">Winner</a>
            <a class="active" href="adminhome.php">Home</a>
            <img class="logo" style="float: left" src="../image/logo.png" />
            <p style="float: left">APU Photography Competition</p>
        </div>
        <!-- <div class ="flex1 flex column" > -->
        <a href="adminhome.php">
            <button class="button button1"  style="margin-left:50px; margin-top:20px">BACK</button>
        </a>
        <h1 style="text-align:center">Winner Annoucement</h1>
        
        <div style="text-align:center">
        <h2>Competition Title:
        <input type="text" placeholder="Enter Competition Title Here" name="title" style="width:500px" required> </h2>
        </div>
		<br>

		<div style="display:inline-block;text-align:center;font-size:18px;border:2px solid black;padding:20px 20px;margin:20px 20px;background-color:#A7CAD7">	
        <form action = "winner1.php" method = "POST" enctype="multipart/form-data" > 
            <h3>1st Place Winner</h3>
            <h4>Upload Image here</h4>
            <input type="file" name="image1" accept="image/*" required><br>
            <br>
            <br>Content Title: <input type="text" placeholder="Enter Content Title Here" name="ctitle" style="width:300px" required><br>
            <br>Participant Name: <input type="text" placeholder="Enter Participant Name Here" name="name" style="width:300px" required>
            <br>
            <input style="width:200px;margin:20px 20px" type="submit" value="Submit">
        </form> 
        </div>
		
        <div style="display:inline-block;text-align:center;font-size:18px;border:2px solid black;padding:20px 20px;margin:20px 20px;background-color:#A7CAD7">
        <form action = "winner2.php" method = "POST" enctype="multipart/form-data" >
            <h3>2nd Place Winner</h3>
            <h4>Upload Image here</h4>
            <input type="file" name="image1" accept="image/*" required><br>
            <br>
            <br>Content Title: <input type="text" placeholder="Enter Content Title Here" name="ctitle" style="width:300px" required><br>
            <br>Participant Name: <input type="text" placeholder="Enter Participant Name Here" name="name" style="width:300px" required>
            <br>
            <input style="width:200px;margin:20px 20px" type="submit" value="Submit">
        </form> 
        </div>

        <div style="display:inline-block;text-align:center;font-size:18px;border:2px solid black;padding:20px 20px;margin:20px 20px;background-color:#A7CAD7">
        <form action = "winner3.php" method = "POST" enctype="multipart/form-data" >
            <h3>3rd Place Winner</h3>
            <h4>Upload Image here</h4>
            <input type="file" name="image1" accept="image/*" required><br>
            <br>
            <br>Content Title: <input type="text" placeholder="Enter Content Title Here" name="ctitle" style="width:300px" required><br>
            <br>Participant Name: <input type="text" placeholder="Enter Participant Name Here" name="name" style="width:300px" required>
            <br>
            <input style="width:200px;margin:20px 20px" type="submit" value="Submit">
        </form> 
        </div>
    

    

</body>
</html>