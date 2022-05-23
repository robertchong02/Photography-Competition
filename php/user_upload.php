<?php
include("connect.php");

$uploadImage = $_FILES['image']['tmp_name'];

$img = file_get_contents($uploadImage);

$sql="INSERT INTO content (CompetitionID, ContentImage, ContentTitle, ContentDescription, ParticipantName) 
VALUES 
(9, ?, '$_POST[conTitle]', '$_POST[conDesc]', '$_POST[userName]');";

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

echo $check;
if($check == 1) {
    echo '<script> alert ("New competition added!");
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    </script>';
}

mysqli_close($con);
?>