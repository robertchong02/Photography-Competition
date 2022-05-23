<?php
include("connect.php");






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Code Here</title>
</head>
<body>
    <h1>You ARe Welcome to test your shit code here</h1> 
</body>
</html>

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
('$_POST[9]',?,'$_POST[conTitle]','$_POST[conDesc]', '$_POST[userName]')" ;


$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

echo $check;
if($check == 1) {
    echo '<script> alert ("New coffee beans in stock! Image uploaded.");
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    </script>';
}


mysqli_close($con);


?>