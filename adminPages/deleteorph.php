
<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "orphan";

// Database Connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

$id = $_GET["idorphan"];
$sql = "DELETE FROM `addorphan` WHERE idorphan = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: profileAdmin.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}



// include "./addorphan/connection.php";

// $id = $_GET["id"];

// // Check if there are related records in addorphan table
// $checkSql = "SELECT * FROM `addorphan` WHERE `branchID` = $id";
// $checkResult = mysqli_query($conn, $checkSql);

// if (mysqli_num_rows($checkResult) > 0) {
//     // Handle related records in addorphan table before deleting the branch
//     while ($row = mysqli_fetch_assoc($checkResult)) {
//         // You may choose to delete related records or update the foreign key values
//         // For example, to delete related records:
//         $relatedId = $row['id'];
//         $deleteRelatedSql = "DELETE FROM `addorphan` WHERE `id` = $id";
//         mysqli_query($conn, $deleteRelatedSql);
//     }
// }
?>
