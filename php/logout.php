<?php
    // Destory a Session
    session_start();
    
    echo "<script>
    alert('You have successfully logout.');
    </script>";

    header('location: ../php/main.php');

    session_unset();
    session_destroy();
?>