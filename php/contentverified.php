<?php
include("connect.php");

// $uploadImage = $_FILES['image']['tmp_name'];

// $img = file_get_contents($uploadImage);

$sql="INSERT INTO verifycontent (vcompetitionID, vcontentImage, vcontentTitle, vcontentDescription, ParticipantName) 
VALUES 
('$_POST[compID]', '$_POST[image]', '$_POST[title]', '$_POST[description]', '$_POST[name]');";

$stmt = mysqli_prepare($con,$sql);

// mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);


$check = mysqli_stmt_affected_rows($stmt);

echo $check;
if($check == 1) {
    echo '<script> alert ("Content verified successfully. A message will be sent to notify the participant.");
    window.location.href= "verifycontent.php";
    </script>';

} else {
    echo '<script> alert ("Error.");
    </script>';
}

mysqli_close($con);
?>