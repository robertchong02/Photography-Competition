<?php
include("connect.php");
include("session.php");
    $customerID = $_SESSION['ID'];

	// $CompetitionID = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '$CompetitionID';");

// include("session.php");
//     $customerID = $_SESSION['ID'];

// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
//  }
//    echo "Connected successfully";

$uploadImage = $_FILES['image']['tmp_name'];

$img = file_get_contents($uploadImage);

$sql = "INSERT INTO content (CompetitionID, ContentImage ,ContentTitle ,ContentDescription ,ParticipantName)
VALUES
($_POST[CompID],?,'$_POST[conTitle]','$_POST[conDesc]', '$_POST[userName]')" ;

echo $sql;

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

echo $check;
if($check == 1) {
    echo '<script> alert ("Image uploaded.");
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    </script>';
}


mysqli_close($con);


?>