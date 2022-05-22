<?php
include("connect.php");

// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
//  }
//    echo "Connected successfully";

$uploadImage = $_FILES['filename']['tmp_name'];

$file = file_get_contents($uploadImage);

$sql = "INSERT INTO 'content' (ContentImage ,ContentTitle ,ContentDescription ,ParticipantName)
VALUES(?,'$_POST[conTitle]','$_POST[conDesc]', '$_POST[userName]')" ;


$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$file);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

echo $check;


mysqli_close($con);


?>