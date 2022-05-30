<?php
include("connect.php");
include("session.php");
$customerID = $_SESSION['Customer_ID'];
$vcompetitionID = mysqli_real_escape_string($con, $_GET['vcompetitionID']);
$vconID = mysqli_real_escape_string($con, $_GET['vconID']);
$date = date('Y-m-d');


if($_GET["vote"]) {
        $checkCustomerID = "SELECT * FROM `voting` WHERE `Customer_ID` = '$customerID' And `vcompetitionID` = '$vcompetitionID'";    

        $validate_CustomerID = mysqli_query($con, $checkCustomerID);

        $rowresultcount = mysqli_num_rows($validate_CustomerID);

        if ($rowresultcount>0){
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