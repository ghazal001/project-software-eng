<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "orphan";

// Database Connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

session_start();

if (isset($_POST["submit"])) {
   $idorphan = isset($_POST['idorphan']) ? $_POST['idorphan'] : '';
   $amount = isset($_POST['donationN']) ? $_POST['donationN'] : '';
   $donationM = isset($_POST['donationM']) ? $_POST['donationM'] : '';
   $id = $_SESSION['id'];

    // Assuming `branch_name` is the correct variable for branchID
   //  $sql = "INSERT INTO `addorphan`( `nameorphan`, `age`, `gender`, `branchID`, `amount`, `description`)
   //          VALUES ('$nameorphan', '$age', '$gender', '$branch_name', '$amount', '$description')";
   $sql = "INSERT INTO `donation`( `donationN`, `userId`, `orphanId`,`donationM`) 
            VALUES ('$amount','$id','$idorphan','$donationM')";
   $result = mysqli_query($conn, $sql);

   if ($result) {
      $successMessage = "Thank you for your donation; The world is better having people like you!!";
    } else {
        $errorMessage = "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./akkarr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title> </title>
</head>
<body>
        <!-- <div class="page"> -->
        <nav class="navbar">
            <h1 class="logo"> Give & Thrive</h1>
             
        </nav>
        <!-- <P class="img"><img src="dada.jpg"></p> -->
        <div class="container">
            <div class="table">
                
                <!-- <a href="./triprequest/triprequest.php " class="tripR" >Trip Request <?php echo "($nb)"; ?></a> -->
    <!-- <main class="table">
        <section class="table__header">
            <h1>Akkar Branch </h1> -->
            <!-- <a href="./addneworphan.php">Add Orphan</a>
            <a href="./tabledriver/index.php" class='newtrip'>Add a branch </a> -->
            <!-- <a href="#"  class="trip">Your Trips</a> -->

        </section>
    
        <!-- <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> age </th>
                        <th> gender </th>
                        <th> Location</a></th>
                        <th> amount</th>
                        <th>description</th>
                        <th>Donation for people</th>
                        <th></th>
                    </tr>
                </thead> -->
                <tbody>
  </tbody>
                 

<?php

include "../connection.php";

// ?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="./akkarr.css">
   <title> </title>
</head>

<body>
    

   <div class="container">
      <div class="text-center mb-4">
         <h3>Donation Form </h3>
         <p class="text-muted">Complete for donation of people</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">nameorphan</label>
                  <select type="text" class="form-control" name="idorphan" placeholder="name">
                     <?php
                     $getAdmin = "SELECT * FROM `addorphan` WHERE 1";
                     $getAdminRes = mysqli_query($conn , $getAdmin);
                     while ($row = mysqli_fetch_array($getAdminRes)) {
                        # code...
                        echo "<option value=".$row['idorphan'].">".$row['nameorphan']."</option>";
                     }
                     ?>
                  </select>
                  </div>
               <div class="col">
                  <label class="form-label"> branchname:</label>
                  <select class="form-control" name="location" id="" >
                     <?php
                        $getBranch = "SELECT * FROM `location` WHERE 1";
                        $getBranchRes = mysqli_query($conn , $getBranch);
                        while ($row = mysqli_fetch_array($getBranchRes)) {
                           echo "<option value=".$row['locationid'].">".$row['locationname']."</option>";
                        }
                     ?>
                  </select>
                  </div>
               <div class="col">
                  <label class="form-label"> Amount:</label>
                  <input type="number" class="form-control" name="donationN" placeholder="br">
               </div>
               &nbsp;
               
            </div>
            <div class="col">
                  <label class="form-label"> input the number of month you want to donate for :</label>
                  <input type="number" class="form-control" name="donationM" placeholder="br">
               </div>

            <div>
               <button type="submit" href="../adminPages/donationadmin.php" class="btn btn-success" name="submit">Donate</button>
               <a href="../userPages/profileUser.php" class="btn btn-danger">Cancel</a>
            <!-- Display success or error message -->
            <?php
               if (isset($successMessage)) {
                  echo '<p style="color: white;">' . $successMessage . '</p>';
               } elseif (isset($errorMessage)) {
                  echo '<p style="color: black;">' . $errorMessage . '</p>';
               }
               ?>

            </div>
         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
<style>
body{
   background-color: #552424 !important;
}
h3{
   margin-top: 70px;
   color:white;
}
.text-muted{
   color:white;
}
.navbar
{
   position: absolute;
        top: 0;
        left: 0;
        display: flex;
        width: 100%;
        justify-content: space-between;
        padding: 10px;
        color:white;
        background-color: #0000007a;
}
   </style>