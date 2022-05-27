<?php
    include("connect.php");

    $selectData = $_POST['contentID'];

    $deleteQuery = mysqli_query($con, "DELETE FROM content WHERE contentID = '$selectData';");

    if ($deleteQuery) {
        echo '<script>
        alert ("Successfully reject content!");
        </script>';
        
    } else {
        echo '<script>
        alert ("Please try again!");
        </script>';
    };

    mysqli_close($con);
?>