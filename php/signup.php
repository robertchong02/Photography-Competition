<?php
include("connect.php");

//Customer Info and Validations
$Fname = mysqli_real_escape_string($con, $_POST['firstname']);
$Lname = mysqli_real_escape_string($con, $_POST['lastname']);
$Username = mysqli_real_escape_string($con, $_POST['username']);
$Email = mysqli_real_escape_string($con, $_POST['email']);
$ContactNumber = mysqli_real_escape_string($con, $_POST['phone']);
$Gender = mysqli_real_escape_string($con, $_POST['gender']);
$DoB = mysqli_real_escape_string($con, $_POST['dob']);
$Nationality = mysqli_real_escape_string($con, $_POST['nationality']);
$Password = mysqli_real_escape_string($con, $_POST['password']);
$ConfirmPassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);


// MySQL Queries
$insert = "INSERT INTO user (Fname, Lname, Username, Email, ContactNumber, Gender, DoB, Nationality, Password, ConfirmPassword) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[username]',  '$_POST[email]', '$_POST[phone]', '$_POST[gender]', '$_POST[dob]', '$_POST[nationality]', '$_POST[password]', '$_POST[confirmpassword]');";
$check_username = "SELECT * FROM user WHERE Username = '$Username'";
$check_email = "SELECT * FROM user WHERE Email = '$Email'";

$validate_username = mysqli_query($con, $check_username);
$validate_email = mysqli_query($con, $check_email);

// PHP
if($Password == $ConfirmPassword)
{
    if(mysqli_num_rows($validate_email) == 0) 
    {
        if(mysqli_num_rows($validate_username) == 0)
        {
            if(mysqli_query($con, $insert))
            {
                echo 
                '<script>
                alert("Thank you for signing up with APU Photography Club. Please proceed to login.");
                window.location.href = "userlogin.php";
                </script>';
            }
            else
            {
                echo 
                '<script>
                alert("Sign up failed. Please try again. Sorry for the inconvience.");
                window.location.href = "usersignup.php";
                </script>';
            }
        }
        else
        {
            echo 
            '<script>
            alert("Username is already taken. Please try a different username.");
            window.location.href = "usersignup.php";
            </script>';
        }
    } 
    else
    {
        echo 
        '<script>
        alert("There is an existing email address similiar to what you typed. Please login or try a different email address.");
        window.location.href = "usersignup.php";
        </script>';
    }
} else 
{
    echo 
    '<script>
    alert("Passwords are not matching.");
    window.location.href = "usersignup.php";
    </script>';
}

// Close connection to database
mysqli_close($con);

?>