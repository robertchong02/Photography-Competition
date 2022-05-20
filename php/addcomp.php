<?php
include("connect.php");

$uploadImage = $_FILES['image']['tmp_name'];

$img = file_get_contents($uploadImage);

$sql="INSERT INTO competition (CompetitionTitle, CompetitionImage, Theme, RegisterDate, Deadline, CompetitionDate, Prize, Eligibility, Description, Guideline) 
VALUES 
('$_POST[title]', ?, '$_POST[theme]', '$_POST[rdate]', '$_POST[deadline]', '$_POST[cdate]', '$_POST[prize]', '$_POST[eligibility]', '$_POST[description]', '$_POST[guideline]');";

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

if($check == 1) {
    echo '<script> alert ("New competition added!");

    </script>';

} else {
    echo '<script> alert ("Upload failed.");

    </script>';
}

mysqli_close($con);
?>