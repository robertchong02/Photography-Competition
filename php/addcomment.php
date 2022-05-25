<?php

include("connect.php");

$vconID = mysqli_real_escape_string($con,$_POST['vconID']);
$comment = mysqli_real_escape_string($con,$_POST['comment']);

$sql = "INSERT INTO comment_table (vcontentID, comment)
VALUES
('$vconID','$comment')" ;

$insert = mysqli_query($con, $sql);

if($insert)
{
    echo
    '<script>
    alert("Feedback submitted. Thank you for your time.");
    window.location.href = "userhome.php";
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

// include("connect.php");

// $vconID = mysqli_real_escape_string($con,$_GET['vconID']);
// $comment = mysqli_real_escape_string($con,$_POST['comment']);

// $sql = "INSERT INTO contentcomment (vcID, contentcomment)
// VALUES
// ('$vconID','$comment')" ;

// $insert = mysqli_query($con, $sql);

// if($insert)
// {
//     echo
//     '<script>
//     alert("Feedback submitted. Thank you for your time.");
//     window.location.href = "customerprofile.php";
//     </script>';
// }
// else
// {
//     echo
//     '<script>
//     alert("Failed to submit feedback. Please try again");

//     </script>';
// }

// // Close connection to database
// mysqli_close($con);
?>