<?php
    // Start a Session
    session_start();
    if(!isset($_SESSION['Customer_ID']))
    {
        header("location: userhome.php");
    }
?>