<?php
    include("connect.php");

    $selectData = $_GET['vcontentID'];

    $deleteQuery = mysqli_query($con, "DELETE FROM verifycontent WHERE vcontentID = '$selectData';");

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