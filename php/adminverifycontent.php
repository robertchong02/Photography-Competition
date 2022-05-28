<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Verify content</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../css/verifycontent.css">
</head>

<body class="flex" style="background-image:url('../image/bg1.png')">

    <div class="flex1 flex column">
        <!--头部栏-->
        <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="winnerannounce.php">Winner</a>
        <a class="active" href="adminhome.php">Home</a>
        <img class="logo" style="float: left" src="../image/logo.png" />
        <p style="float: left">AP Photography Club</p>
    </div>

        <p align="left" style="margin:20px">
            <a href="adminhome.php"><button type="button" class="button button1">BACK</button></a>
        </p>

        <h1 style=" margin-left:50px">Content Verification</h1>

        <!--内容区-->
        <div style="background-color:#A7CAD7" class="flex1">

            <!--Content Area-->
            <div style="height:auto; margin:10px;" >

            <?php
  			$fetchData = mysqli_query($con, "SELECT * FROM content");
  			while($row = mysqli_fetch_assoc($fetchData)) 
                {		        
            $displayData = '
            <form action ="approvereject.php" method="POST"  enctype="multipart/form-data">
                <div class="flex boxBorder">
                    <div style="width: 35%; border-right: double; margin-right: 50px;">
                    <div style="padding-left:15px; padding-top:22px"><img src="data:image/jpg;base64, '.base64_encode($row["ContentImage"]).'" style="max-width:100%; height:250px"></div>
                    </div>
                    <div style="width:60%">
                    <label for="ContentID"><b>ContentID:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value = "'.$row["ContentID"].'" name="contentID"  class="compread2" readonly/></label>
                    <br>
                    <label for="CompetitionID"><b>CompetitionID:</b>&nbsp;<input type="text" value = "'.$row["CompetitionID"].'" name="compID"  class="compread2" readonly/></label>
                    <br>
                    <label for="ContentTitle"><b>Content Title:</b>&nbsp;&nbsp;&nbsp;<input type="text" value = "'.$row["ContentTitle"].'" name="title"  class="compread2" readonly/></label>
                    <br>
                    <label for="Description"><b>Description: </b></label>
                    <div style="padding-left:10px"><textarea name = "description" cols=40  rows=3 style="width: 80%;height: 90px;margin-top:15px;background: #f1f1f1" readonly>'.$row["ContentDescription"].'</textarea></div>
                    <br>
                    <label for="Participant"><b>Participant Name: </b><input type="text" value = "'.$row["ParticipantName"].'" name="name"  class="compread2" readonly/></label>
                    <br><br>

                    <input type="submit button" class="button button1" style="font-size:10px; width:40px; height:2px" value="Approve" name="approve" readonly/>
                    <input type="submit button" class="button button1" style="font-size:10px; width:40px; height:2px; background-color:red" value="Reject" name="reject" readonly/>

                    </div>                 
                
                </div>
                </form>
                ';

                echo $displayData;
            }
            ?>        
            </div>

        </div>

    </div>



</body>
</html>