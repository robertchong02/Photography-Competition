<?php
include("connect.php");

$uploadImage = $_FILES['image1']['tmp_name'];

$img = file_get_contents($uploadImage);

$sql="INSERT INTO winner1 (wcompTitle, wcontentTitle, wcontentImage, wname) 
VALUES 
('$_POST[title]', '$_POST[ctitle]', ?, '$_POST[wname]');";

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

echo $check;
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