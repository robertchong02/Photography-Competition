<?php
include("connect.php");
include("session.php");
$customerID = $_SESSION['Customer_ID'];
$vcompetitionID = mysqli_real_escape_string($con, $_GET['vcompetitionID']);
$vconID = mysqli_real_escape_string($con, $_GET['vconID']);
$date = date('Y-m-d');


if($_GET["vote"]) {
        $checkCustomerID = "SELECT * FROM `voting` WHERE `Customer_ID` = '$customerID'";    
        $checkCompID = "SELECT * FROM `voting` WHERE `vcompetitionID` = '$vcompetitionID'";
        // $checkVContentID ="SELECT * FROM `voting` WHERE`vconID` ='$vconID'";

        $validate_CustomerID = mysqli_query($con, $checkCustomerID);
        $validate_CompID = mysqli_query($con, $checkCompID);
        // $validate_VContentID = mysqli_query($con, $checkVContentID);

        $row_CustomerID = mysqli_fetch_assoc($validate_CustomerID);
        $row_CompID = mysqli_fetch_assoc($validate_CompID);
        // $row_VContentID = mysqli_fetch_assoc($validate_VContentID);

        if (($customerID == $row_CustomerID["Customer_ID"]) && ($vcompetitionID == $row_CompID["vcompetitionID"])){
        echo '<script> alert ("Vote already existed");
            window.location.href= "userhome.php";
            </script>';
        }
        else {
            $sql="INSERT INTO voting (`Customer_ID`, `vcompetitionID`, `vcontentID` ,`date`) VALUES ('$customerID','$vcompetitionID','$vconID','$date');";
            $result = $con -> query($sql);
            
            echo $result;

            if($result == 1) {
                echo '<script> alert ("Voted Successfully");
                window.location.href= "userhome.php";
                </script>';

            } else {
                echo '<script> alert ("Error.");
                </script>';
            }
        }
        
        mysqli_close($con);
  }

