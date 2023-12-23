<?php
if (isset($_GET['trip'])) {
    include("../connection.php");
    $trip = $_GET['trip'];

    $getStudent = "SELECT
    u.username
FROM
    reservetrip rt
JOIN
    trip t ON rt.tripID = t.tripId
JOIN
    user u ON rt.studentID = u.id
WHERE
    t.tripId = $trip
    ";

    $getStudentTrip = mysqli_query($conn , $getStudent );

    while ($row = mysqli_fetch_array($getStudentTrip)) {
        echo "student : ".$row['username']." <br>";
    }
}

?>