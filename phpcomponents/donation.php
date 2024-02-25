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
   
   // Fetch required attributes of the orphan
   $query = "SELECT amount FROM addorphan WHERE idorphan = ?";
   $statement = $conn->prepare($query);
   $statement->bind_param("i", $idorphan);
   $statement->execute();
   $result = $statement->get_result();

   // Check if the orphan exists
  
       $row = $result->fetch_assoc();
       $totalamnt = $row['amount'];


       // Calculate new amount
       $nw_amnt = $totalamnt - $amount;

       // Further processing...

   // Close statement and database connection
      $statement->close();
   
   


   
   $sql = "INSERT INTO donation (iddonation, donationN, userId, orphanId, donationM)
            VALUES (NULL,'$amount','$id','$idorphan','$donationM')";
   $result = mysqli_query($conn, $sql);

   if ($result) {
      $sql2 = "UPDATE addorphan SET
        amount = $nw_amnt
        WHERE idorphan = $idorphan";
      $result2 = mysqli_query($conn, $sql2);
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
               
        </section>
    
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
         <form action="" action="donation.php" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label"><b>nameorphan</b></label>
                  <?php
                  if(isset($selectedOrphanId)) {
                     $getOrphan = "SELECT * FROM `addorphan` WHERE idorphan = $selectedOrphanId";
                     $getOrphanRes = mysqli_query($conn, $getOrphan);
                     if($getOrphanRes && mysqli_num_rows($getOrphanRes) > 0) {
                     $row = mysqli_fetch_array($getOrphanRes);
                     $selectedOrphanName = $row['nameorphan'];
                     echo "<input type='text' class='form-control' value='$selectedOrphanName' disabled>";
                  } else {
                     echo "Orphan not found.";
                  }
                  } else {
                  echo "Orphan ID not provided.";
                  }
                  ?>                     
                  </div>
               <div class="col">
               <label class="form-label"><b>Branch Name:</b></label>
               <?php
               if(isset($selectedBranchId)) {
               $getBranch = "SELECT * FROM `location` WHERE locationid = $selectedBranchId";
               $getBranchRes = mysqli_query($conn, $getBranch);
               if($getBranchRes && mysqli_num_rows($getBranchRes) > 0) {
               $row = mysqli_fetch_array($getBranchRes);
               $selectedBranchName = $row['locationname'];
               echo "<input type='text' class='form-control' value='$selectedBranchName' disabled>";
               } else {
               echo "Branch not found.";
               }
               } else {
               echo "Branch ID not provided.";
               }
               ?>
                  </div>
               <div class="col">
                  <label class="form-label"><b> Amount:</b></label>
                  <input type="number" class="form-control" name="donationN" placeholder="nb">
               </div>
               &nbsp;
               
            </div>
            <div class="col">
                  <label class="form-label"><font size="4"><b> Input the number of month you want to donate for :</b></font></label>
                  <input type="number" class="form-control" name="donationM" placeholder="nb">
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