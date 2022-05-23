<?php
include("connect.php");

// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
//  }
//    echo "Connected successfully";

$uploadImage = $_FILES['filename']['tmp_name'];

$file = file_get_contents($uploadImage);

$sql = "INSERT INTO content (CompetitionID, ContentImage ,ContentTitle ,ContentDescription ,ParticipantName)
VALUES(10,?,'$_POST[conTitle]','$_POST[conDesc]', '$_POST[userName]')" ;


$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$file);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);


if($check == 1) {
    echo '<script> alert ("New competition added!");
    window.location.href= "compadminPost.php";
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    </script>';
}


mysqli_close($con);


?>