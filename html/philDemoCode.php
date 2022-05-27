<?php
include("connect.php");






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Code Here</title>
</head>
<body>
    <h1>You ARe Welcome to test your shit code here</h1> 
</body>
</html>

<?php
include("connect.php");
include("session.php");
    $customerID = $_SESSION['ID'];

	// $CompetitionID = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '$CompetitionID';");

// include("session.php");
//     $customerID = $_SESSION['ID'];

// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
//  }
//    echo "Connected successfully";

$uploadImage = $_FILES['image']['tmp_name'];

$img = file_get_contents($uploadImage);

$sql = "INSERT INTO content (CompetitionID, ContentImage ,ContentTitle ,ContentDescription ,ParticipantName)
VALUES
('$_POST[9]',?,'$_POST[conTitle]','$_POST[conDesc]', '$_POST[userName]')" ;


$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

echo $check;
if($check == 1) {
    echo '<script> alert ("New coffee beans in stock! Image uploaded.");
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    </script>';
}


mysqli_close($con);


?>


<form action = "winner.php" method = "POST" enctype="multipart/form-data">
        <!--nei rong qu-->
        <div style="height: auto; background-color:#A7CAD7;" class="flex">

            <!-- 左边栏 -->
            <!-- <form method="POST" action="winner1.php" ></form> -->
            <div class="" style="width: auto;background-color:#A7CAD7">
                
                <div style="height: 100px;" class="flex flex column boxModel">
                <h2>Competition Title: </h2>
                <input type="text" placeholder="Enter Competition Title Here" name="title" required>
                
                
                </div>
                <div style="height: 100px;" class="flex flex column boxModel">
                
                <h2>1st place winner: </h2>
                <input type="text" name="winnername1" required>

                </div>
                <div style="height: 100px;" class="flex flex column boxModel">

                <h2>2nd place winner: </h2>
                <input type="text" name="winnername2" required>
                
                </div>
                <div style="height: 100px;" class="flex flex column boxModel">
                                    
                <h2>3rd place winner: </h2>   
                <input type="text" name="winnername3" required>

                </div>

            </div>

            <!--右边栏-->
            <div class="" style="width: auto;">

                <div style="height: 100px;" class="flex flex column boxModel"></div>
                <div style="height: 100px;" class="flex flex column boxModel">
                <h2>Content Title: </h2>
                <input type="text" name="ct1" required></div>
                <div style="height: 100px;" class="flex flex column boxModel">
                <h2>Content Title: </h2>
                <input type="text" name="ct2" required></div>
                <div style="height: 100px;" class="flex flex column boxModel">
                <h2>Content Title: </h2>
                <input type="text" name="ct3" required></div>

            </div>

            <!--照片栏-->
            <div class="" style="width: auto;">

                <div style="height: 100px;" class="flex flex column boxModel ">
                    <!-- <input type="file" id="myFile" name="filename" ><br>
                    <br> -->

                    <!-- <input type="submit"><br> -->
                    
                </div>
                <div style="height: 100px;" class="flex flex column boxModel">

                    <input type="file" name="image1" accept="image/*"  required><br>
                    <br>
                    <!-- <input type="submit"><br> -->

                </div>
                <div style="height: 100px;" class="flex flex column boxModel">

                    <input type="file" name="image2" accept="image/*"  required><br>
                    <br>
                    <!-- <input type="submit"><br> -->

                </div>
                <div style="height: 100px;" class="flex flex column boxModel">
                
                    <input type="file" name="image3" accept="image/*" required><br>
                    <br>

                    <!-- <input type="submit"><br> -->

                </div>

            </div>
        </div>
            <br><br>
            <div class="post-container">
            <?php
            $displaypage="<a href='winner.php?ResultID=4'>
            <input type='submit' value='Post Annoucement'>
            </a>"
            ;
            echo $displaypage
            ?>
            </div>



        </div>

    </form>