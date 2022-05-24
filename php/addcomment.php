<?php
include("connect.php");

$comment = mysqli_real_escape_string($con,$_POST['comment']);

$sql = "INSERT INTO contentcomment (vcID, contentcomment)
VALUES
('$_POST[vconID]','$comment')" ;

$insert = mysqli_query($con, $sql);

if($insert)
{
    echo
    '<script>
    alert("Feedback submitted. Thank you for your time.");
    window.location.href = "customerprofile.php";
    </script>';
}
else
{
    echo
    '<script>
    alert("Failed to submit feedback. Please try again");

    </script>';
}

// Close connection to database
mysqli_close($con);
?>