<?php
    // Start a Admin Session
    session_start();
    if(!isset($_SESSION['adminID']))
    {
        header("location: adminhome.php");
    }
?>