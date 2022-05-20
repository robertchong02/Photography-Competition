<?php
    $con = mysqli_connect("localhost", "" , "" , "sdp");

    // Check Connection
    if(mysqli_connect_errno()) {
        echo 'Failed to connect to PHPmyAdmin / MySQL: ' . mysqli_connect_error();
        echo '<script>
        alert ("Unable to connect!");
        </script>';   
    }
?>