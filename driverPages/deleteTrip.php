<?php
include('../connection.php');

// Check if tripID is provided in the query parameters
if (isset($_GET['tripID'])) {
    $tripID = $_GET['tripID'];

    // Perform the deletion
    $deleteTrip = "DELETE FROM trip WHERE tripID = $tripID";
    $result = mysqli_query($conn, $deleteTrip);

    if ($result) {
        // Deletion successful, you can redirect to another page or display a success message
        header('location:./profileDriver.php');
        exit();
    } else {
        // Handle deletion failure
        echo "Error deleting trip: " . mysqli_error($conn);
    }
} else {
    // Handle missing tripID
    header('location:./profileDriver.php');
}
?>
