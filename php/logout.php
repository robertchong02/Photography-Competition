<?php
    session_start();

    session_unset();
    session_destroy();
    echo '<script>alert("Successfully Logout!")
    
    window.location.href = "../html/main.html"
    
    </script>';

    

   
?>