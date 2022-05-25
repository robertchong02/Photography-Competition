<?php
include("connect.php");

if (isset($_POST['Update'])) {

  $customerID = $_GET['ID'];

  $Username=$_POST['Username'];
  $ContactNumber=$_POST['Contact_Number'];
  $Password=$_POST['Password'];


  $query = "UPDATE usersignup SET Username = '".$Username."', ContactNumber = '".$ContactNumber."', Password = '".$Password."'WHERE Customer_ID = '".$customerID."'";

  
  $result = mysqli_query($con, $query);

  if ($result){
    echo '<script type="text/javascript"> alert("Your personal information have been successfully saved!") </script>';
  }
  else{
    echo '<script type="text/javascript"> alert("Unable to save your changes. Please try again.")</script>';
  }

}
?>