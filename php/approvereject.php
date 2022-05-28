<?php
include("connect.php");

if($_POST["approve"]) {

        $sql="INSERT INTO verifycontent (`vcontentID`, `vcompetitionID`, `vcontentImage` ,`vcontentTitle`, `vcontentDescription`, `ParticipantName`) 
        SELECT `ContentID`, `CompetitionID`, `ContentImage` ,`ContentTitle`, `ContentDescription`, `ParticipantName` FROM content WHERE ContentID = ".$_POST["contentID"];
        $result = $con -> query($sql);

        $sql2="DELETE FROM content WHERE ContentID = ".$_POST["contentID"];
        $result2 = $con -> query($sql2);


        echo $result;
        echo $result2;

        if($result == 1) {
            echo '<script> alert ("Content verified successfully. A message will be sent to notify the participant.");
            window.location.href= "adminverifycontent.php";
            </script>';

        } else {
            echo '<script> alert ("Error.");
            </script>';
        }

        mysqli_close($con);
  }


if($_POST["reject"]) {
    $selectData = $_POST['contentID'];
    echo $selectData;

$deleteQuery = mysqli_query($con, "DELETE FROM content WHERE contentID = '$selectData';");

if ($deleteQuery) {
    echo '<script>
    alert ("Successfully reject content!");
    window.location.href= "adminverifycontent.php";
    </script>';
    
} else {
    echo '<script>
    alert ("Please try again!");
    </script>';
};

mysqli_close($con);
}

?>
