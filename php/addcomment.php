<?php
include("connect.php");

$sql = "INSERT INTO contentcomment (vcID, contentcomment)
VALUES
($_POST[vconID],?,'$_POST[comment]')" ;

$stmt = mysqli_prepare($con,$sql);

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