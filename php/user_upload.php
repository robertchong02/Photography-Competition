<?php
include("connect.php");

$uploadImage = $_FILES['image']['tmp_name'];

$img = file_get_contents($uploadImage);

<<<<<<< HEAD
$sql="INSERT INTO content (CompetitionID, ContentImage, ContentTitle, ContentDescription, ParticipantName) 
VALUES 
(9, ?, '$_POST[conTitle]', '$_POST[conDesc]', '$_POST[userName]');";
=======
$sql = "INSERT INTO content (CompetitionID, ContentImage ,ContentTitle ,ContentDescription ,ParticipantName)
<<<<<<< HEAD
VALUES(10,?,'$_POST[conTitle]','$_POST[conDesc]', '$_POST[userName]')" ;
=======
VALUES
(9,?,'$_POST[conTitle]','$_POST[conDesc]', '$_POST[userName]')" ;
>>>>>>> 02d56bcb19b4c35f77e28357b1c821748c4f4e80

>>>>>>> cecbe0b185030a05b1c5fc30834468dd32ed57f3

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

<<<<<<< HEAD

if($check == 1) {
    echo '<script> alert ("New competition added!");
    window.location.href= "compadminPost.php";
=======
echo $check;
if($check == 1) {
<<<<<<< HEAD
    echo '<script> alert ("New competition added!");
=======
    echo '<script> alert ("New coffee beans in stock! Image uploaded.");
>>>>>>> 02d56bcb19b4c35f77e28357b1c821748c4f4e80
>>>>>>> cecbe0b185030a05b1c5fc30834468dd32ed57f3
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    </script>';
}

mysqli_close($con);
?>