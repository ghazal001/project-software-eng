
<?php
require('../connection.php');


if (isset($_GET['reservationID']) && isset($_GET['tripID'])) {
    session_start();
    $reservationID = $_GET['reservationID'];
    $tripID = $_GET['tripID'];
    $id=$_SESSION['id'];



    $updateAvailableNB = "UPDATE `trip` 
    SET`availableNB`=`availableNB` + 1 
    WHERE `tripID`= '$tripID'";

    $updateAvailableNBRes = mysqli_query($conn , $updateAvailableNB);
    
    $deleteRes = "DELETE FROM `reservetrip` 
    WHERE `reservationID`= '$reservationID' AND `studentID` = '$id'";

    $result = mysqli_query($conn, $deleteRes);

    header('location:./profileStudent.php');
    

} else {
    // Handle missing tripID
    header('location:./profileStudent.php');
}
?>