<?php
    include("connect.php");

    $uploadImage = $_FILES['image']['tmp_name'];

    $img = "INSERT INTO content (CompetitionID, ContentImage, ContentTitle, ContentDescription, ParticipantName)
    VALUES
    ()"







?>