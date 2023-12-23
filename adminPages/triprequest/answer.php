<?php
include('../../connection.php');
if (isset($_GET['ans']) && isset($_GET['reqId']) && isset($_GET['studentID']) && isset($_GET['tripID']))  {
    session_start();
    $reqId = $_GET['reqId'];
    $ans = $_GET['ans'];
    $studentID = $_GET['studentID'];
    $tripID = $_GET['tripID'];

    $driverID = $_SESSION['id'];

    $deleteRequest =  "DELETE FROM request WHERE `request`.`requestID` = $reqId";

    $reserveTrip = "INSERT INTO `reservetrip`(`tripID`, `studentID`) 
    VALUES ('$tripID','$studentID')";
    if ($ans == "true") {
        $reserve = mysqli_query($conn , $reserveTrip);
        
        $updateAvailableNb = "UPDATE `trip` SET `availableNB`=`availableNB` - 1
                                WHERE `tripID` = $tripID AND `availableNB` > 0";
        $update = mysqli_query($conn , $updateAvailableNb);
        $delete = mysqli_query($conn , $deleteRequest);
        header('location:./triprequest.php');
    }else {
        $delete = mysqli_query($conn , $deleteRequest);
        header('location:./triprequest.php');
    }
}

?>