<?php

include "../connection.php";

if (isset($_POST["submit"])) {
    $idorphan = isset($_POST['idorphan']) ? $_POST['idorphan'] : '';
    $nameorphan = isset($_POST['nameorphan']) ? $_POST['nameorphan'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $location =  $_POST['location'];
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';

    // Assuming `branch_name` is the correct variable for branchID
   //  $sql = "INSERT INTO `addorphan`( `nameorphan`, `age`, `gender`, `branchID`, `amount`, `description`)
   //          VALUES ('$nameorphan', '$age', '$gender', '$branch_name', '$amount', '$description')";
   $sql = "INSERT INTO `addorphan`(`nameorphan`, `age`, `gender`, `amount`, `description`, `locationID`)
          VALUES ('$nameorphan','$age','$gender','$amount','$description','$location')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: profiledriver.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
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

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title> </title>
</head>

<body>
    

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New orphan</h3>
         <p class="text-muted">Complete the form below to add a orphan</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">nameorphan</label>
                  <input type="text" class="form-control" name="nameorphan" placeholder="name">
                     <?php
                     $getAdmin = "SELECT * FROM `addorphan` WHERE 1";
                     $getAdminRes = mysqli_query($conn , $getAdmin);
                     while ($row = mysqli_fetch_array($getAdminRes)) {
                        # code...
                        // echo "<option value=".$row['nameorphan'].">".$row['nameorphan']."</option>";
                     }
                     ?>
                  </select>
                  </div>

               <div class="col">
                  <label class="form-label"> age:</label>
                  <input type="text" class="form-control" name="age" placeholder="age">
                 
               </div>
               <div class="col">
                  <label class="form-label"> branchname:</label>
                  <select class="form-control" name="location" id="">
                     <?php
                        $getBranch = "SELECT * FROM `location` WHERE 1";
                        $getBranchRes = mysqli_query($conn , $getBranch);

                        while ($row = mysqli_fetch_array($getBranchRes)) {
                           echo "<option value=".$row['locationid'].">".$row['locationname']."</option>";
                        }
                     ?>
                  </select>
                 
               </div>
             

            <div class="mb-3">
<br>
               <label class="form-label">gender:</label>
               <br>
               <select name="gender" id="" class="form-control">
               
                     <?php
                     $getAdmin = "SELECT * FROM `gender` WHERE 1";
                     $getAdminRes = mysqli_query($conn , $getAdmin);
                     while ($row = mysqli_fetch_array($getAdminRes)) {
                        # code...
                        echo "<option value=".$row['gender'].">".$row['gender']."</option>";
                     }
                     ?>
                  </select>
          
                  </div>
                  <div class="col">
                  <label class="form-label"> Amount:</label>
                  <input type="text" class="form-control" name="amount" placeholder="br">
                 
               </div>
               <div class="col">
                  <label class="form-label"> Description:</label>
                  <input type="text" class="form-control" name="description" placeholder="br">
                 
               </div>
            <!-- <div class="form-group mb-3">
               <label>records:</label>
               <select name="records" id="">
               <?php
            //    $getAdmin = "SELECT * FROM `records` WHERE 1";
            //    $getAdminRes = mysqli_query($conn , $getAdmin);
            //    while ($row = mysqli_fetch_array($getAdminRes)) {
            //       # code...
            //       echo "<option value=".$row['recordsid'].">".$row['recordsN']."</option>";
            //    }
               ?>
            </select> -->
               &nbsp;
               
            </div>
          

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="profiledriver.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
<style>
body{
   background-color: #f3f3f3;
}
h3{
   margin-top: 70px;
}
   </style>