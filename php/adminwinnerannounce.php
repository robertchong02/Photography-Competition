<?php
include("connect.php");
include("adminsession.php");
$AdminID = $_SESSION['adminID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Winner announcement</title>
    <link rel = "stylesheet" href = "../css/winner.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winner Announcement</title>
</head>

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif;">

    <!--上栏-->
    
        <!--头部栏-->
        <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="adminhome.php">Winner</a>
        <a class="active" href="adminhome.php">Home</a>
        <img class="logo" style="float: left" src="../image/logo.png" />
        <p style="float: left">AP Photography Club</p>
        </div>
        <a href="adminhome.php">
            <button class="button button1">BACK</button>
        </a>
        <h1 style="text-align:center">Winner Annoucement</h1>
        
        <form action = "winner1.php" method = "POST" enctype="multipart/form-data" > 
        <div style="text-align:center">
        <h2>Competition Title:
        <input type="text" placeholder="Enter Competition Title Here" name="title" style="width:500px" required> </h2>
        </div>
		<br>

        <div class="flex-container">
		<div style="display:inline-block;
                    text-align:center;
                    font-size:18px;
                    border:2px solid black;
                    padding:20px 20px;
                    margin:20px 20px;
                    background-color:#A7CAD7;
                    border-radius:15px">	
        
            <h3>1st Place Winner</h3>
            <img style="object-fit:contain;width:100px; height:100px;" src="../image/1st.png" />
            <h4>Upload Image here</h4>
            <input type="file" name="image1" accept="image/*" required><br>
            <br>
            <br>Content Title: <input type="text" placeholder="Enter Content Title Here" name="ctitle" style="width:300px" required><br>
            <br>Participant Name: <input type="text" placeholder="Enter Participant Name Here" name="name" style="width:300px" required>
            <br>
            <input style="width:200px;margin:20px 20px;background:#4CAF50;color:white;border-radius:15px" type="submit" value="Submit">
        
        </div>
        </form> 
		
        <div style="display:inline-block;
                    text-align:center;
                    font-size:18px;
                    border:2px solid black;
                    padding:20px 20px;
                    margin:20px 20px;
                    background-color:#A7CAD7;
                    border-radius:15px">	

            <form action = "winner2.php" method = "POST" enctype="multipart/form-data" >
            <h3>2nd Place Winner</h3>
            <img style="object-fit:contain;width:100px; height:100px;" src="../image/2nd.png" />
            <h4>Upload Image here</h4>
            <input type="file" name="image1" accept="image/*" required><br>
            <br>
            <br>Content Title: <input type="text" placeholder="Enter Content Title Here" name="ctitle" style="width:300px" required><br>
            <br>Participant Name: <input type="text" placeholder="Enter Participant Name Here" name="name" style="width:300px" required>
            <br>
            <input style="width:200px;margin:20px 20px;background:#4CAF50;color:white;border-radius:15px" type="submit" value="Submit">
        </form> 
        </div>

        <div style="display:inline-block;
                    text-align:center;
                    font-size:18px;
                    border:2px solid black;
                    padding:20px 20px;
                    margin:20px 20px;
                    background-color:#A7CAD7;
                    border-radius:15px">	
                    
            <form action = "winner3.php" method = "POST" enctype="multipart/form-data" >
            <h3>3rd Place Winner</h3>
            <img style="object-fit:contain;width:100px; height:100px;" src="../image/3rd.png" />
            <h4>Upload Image here</h4>
            <input type="file" name="image1" accept="image/*" required><br>
            <br>
            <br>Content Title: <input type="text" placeholder="Enter Content Title Here" name="ctitle" style="width:300px" required><br>
            <br>Participant Name: <input type="text" placeholder="Enter Participant Name Here" name="name" style="width:300px" required>
            <br>
            <input style="width:200px;margin:20px 20px;background:#4CAF50;color:white;border-radius:15px" type="submit" value="Submit">
        </form> 
        </div>
    </div>
<br><br><br><br>    

<!-- footer -->
<div class="footer" style="font-size:14px" >
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
</div></br>
    

</body>
</html>