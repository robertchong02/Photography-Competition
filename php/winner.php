<?php
include("connect.php");

$uploadImage = $_FILES['image']['tmp_name'];

$img = file_get_contents($uploadImage);

$sql="INSERT INTO result (CompetitionTitle, WinnerName1, WinnerContent1, WinnerName2, WinnerContent2, WinnerName3, WinnerContent3) 
VALUES 
('$_POST[title]', '$_POST[winnername1]', ?, '$_POST[winnername2]', ?, '$_POST[winnername3]',? ;";

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

if($check == 1) {
    echo '<script> alert ("Annoucement post!");
    window.location.href= "compadminPost.php";
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    window.location.href= "compadminPost.php";
    </script>';
}

mysqli_close($con);
?>