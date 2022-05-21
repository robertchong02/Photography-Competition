<?php
    session_start();
    echo '<script>alert("Successfully Logout!")
    
    window.location.href = "../html/main.html"
    
    </script>';

    session_unset();
    session_destroy();

   
?>