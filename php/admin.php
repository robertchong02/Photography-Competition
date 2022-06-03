<?php

//check username password, log in as user

include("connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){


    //Save User input to variable for checking purpose
    $adminname = mysqli_real_escape_string($con, $_POST['adminName']);
    $password =mysqli_real_escape_string($con, $_POST['adminPassword']);

    //MySQL Query


        // MySQL Queries
        $getID = "SELECT adminID FROM adminlogin WHERE adminName = '$adminname' AND adminPassword = '$password';";
            
        // Get customer ID
        $findID = mysqli_query($con, $getID);

        if($findID)
        {
            $rowCount = mysqli_num_rows($findID);
        
            if($rowCount == 1)
            {
                session_start();
                $fetchID = mysqli_fetch_assoc($findID);
                $_SESSION['adminID'] = $fetchID['adminID'];

                echo
                '<script>
                alert("Login successful. Welcome to AP Photography Page!");
                window.location.href = "adminhome.php";
                </script>';
            }
            else
            {
                echo
                '<script>
                alert("Either username or password is incorrect. Please try again.");
                window.location.href = "userlogin.php";
                </script>';
            };
        }
        else
        {
            echo
            '<script>
            alert("SQL Localhost Error.");
            window.location.href = "userlogin.php";
            </script>';
        };
    };


// Close connection to database
mysqli_close($con);
?>