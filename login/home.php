<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
     <?php
     include('../connection.php');
     $id = $_SESSION['id'];
     $query = "SELECT * FROM user WHERE id = $id";
     $res= mysqli_query($conn , $query);

     $row = mysqli_fetch_array($res);

     if ($row['role'] == "admin") {
          header("location:../adminPages/profileAdmin.php");
     }else {
          header("location:../userPages/profileUser.php");
     }
     ?>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>