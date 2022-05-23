<?php
    // Start a Session
    session_start();
    if(!isset($_SESSION['ID']))
    {
        header("location: userhome.php");
    }
?>