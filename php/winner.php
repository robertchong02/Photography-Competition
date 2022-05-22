<?php
include("connect.php");

$uploadImage1 = ($_FILES['image1']['tmp_name']);
$uploadImage2 = ($_FILES['image2']['tmp_name']);
$uploadImage3 = ($_FILES['image3']['tmp_name']);

$img1 = file_get_contents($uploadImage1);
$img2 = file_get_contents($uploadImage2);
$img3 = file_get_contents($uploadImage3);

$sql="INSERT INTO result (CompetitionTitle, WinnerName1, WinnerName2, WinnerName3) 
VALUES 
('$_POST[title]', '$_POST[winnername1]', '$_POST[winnername2]', '$_POST[winnername3]')";
$checksql=mysqli_query($con,$sql);
$sql1="UPDATE result set WinnerContent1=? WHERE ResultID='1' ";
$sql2="UPDATE result set WinnerContent2=? WHERE ResultID='1' ";
$sql3="UPDATE result set WinnerContent3=? WHERE ResultID='1' ";

$stmt1 = mysqli_prepare($con,$sql1);
$stmt2 = mysqli_prepare($con,$sql2);
$stmt3 = mysqli_prepare($con,$sql3);

mysqli_stmt_bind_param($stmt1,"s",$img1);
mysqli_stmt_bind_param($stmt2,"s",$img2);
mysqli_stmt_bind_param($stmt3,"s",$img3);

mysqli_stmt_execute($stmt1);
mysqli_stmt_execute($stmt2);
mysqli_stmt_execute($stmt3);

$check1 = mysqli_stmt_affected_rows($stmt1);
$check2 = mysqli_stmt_affected_rows($stmt2);
$check3 = mysqli_stmt_affected_rows($stmt3);

if ($checksql) {
    echo '<script> alert ("Annoucement post!");
    </script>';
}
else
{
   echo '<script> alert ("Upload fail.");
    </script>'; 
}

if($check1 == 1 ) {
    echo '<script> alert ("Annoucement post!");
    </script>';
    if($check2 == 1){
        echo '<script> alert ("Annoucement postt!");
        </script>';

        if($check3 == 1){
            echo '<script> alert ("Annoucement posttt!");
            </script>';

        } else {
            echo '<script> alert ("Upload failed.");
            </script>';
        }
    }else {
        echo '<script> alert ("Upload failedd.");
        </script>';
    }
}else {
    echo '<script> alert ("Upload faileddd.");
    </script>';
}


mysqli_close($con);
?>