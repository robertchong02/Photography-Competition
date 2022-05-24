<?php
    include("conn.php");
    include("session.php");

    $selectCustomer = $_SESSION['Customer_ID'];

    // Customer Info and Validation
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contactnumber = mysqli_real_escape_string($con, $_POST['contact_number']);

    // MySQL Queries
    $check_username = "SELECT * FROM usersignup WHERE Username = '$username';";
    $check_email = "SELECT * FROM usersignup WHERE Email = '$email';";
    $check_contact_number = "SELECT * FROM usersignup WHERE ContactNumber = '$contactnumber';";

    $validate_username = mysqli_query($con, $check_username);
    $validate_email = mysqli_query($con, $check_email);
    $validate_contact_number = mysqli_query($con, $check_contact_number);

    $row_username = mysqli_fetch_assoc($validate_username);
    $row_email = mysqli_fetch_assoc($validate_email);
    $row_contact_number = mysqli_fetch_assoc($validate_contact_number);

    $updateQuery = "UPDATE usersignup WHERE Username = '$username', Email = '$email', ContactNumber = '$contactnumber' WHERE Customer_ID = '$selectCustomer'";

    if(($username != $row_username["Username"]) || ($email != $row_email["Email"]) || ($contactnumber != $row_contact_number["ContactNumber"]) )
    {
        if(mysqli_query($con, $updateQuery))
        {
            echo
            '<script>
            alert("Contact details changed successfully. 
            window.location.href = "editprofile.php";
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Failed to change contact details. Please try again.");
            window.location.href = "editprofile.php";
            </script>';
        }
    }
    else
    {
        echo
        '<script>
        alert("Both of your contact details are the same as previous. Please provide a different contact number.");
        window.location.href = "editprofile.php";
        </script>';
    }

    mysqli_close($con);
?>