<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "orphan";

// Database Connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

session_start();

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Delete record
    $sql = "DELETE FROM addorphan WHERE idorphan = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: beirut.php?msg=Record deleted successfully");
    } else {
        echo "Failed to delete record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}
?>