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
        header("Location: profileAdmin.php?msg=New record created successfully");
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

   
   <!-- Bootstrap 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    Font Awesome 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

   <link rel="stylesheet" href="./tabledriver/styleorphan.css">
   <title> </title>
</head>

<body>

<h3 class="her">Add New orphan</h3>
         <p class="her">Complete the form below to add a orphan</p>

   <div class="container">
      <!-- <div class="container d-flex justify-content-center"> -->
         <form action="" method="post">
            <div class="all">
               <div class="row1">
                  <label class="lab">Orphan's Name:</label>
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
                  <label class="lab"> Age:</label>
                  <input type="text" class="form-control" name="age" placeholder="age">
               </div>
               <div class="row2">
                  <label class="lab"> Branch's Name:</label>
                  <select class="form-control" name="location" id="">
                     <?php
                        $getBranch = "SELECT * FROM `location` WHERE 1";
                        $getBranchRes = mysqli_query($conn , $getBranch);

                        while ($row = mysqli_fetch_array($getBranchRes)) {
                           echo "<option value=".$row['locationid'].">".$row['locationname']."</option>";
                        }
                     ?>
                  </select>
               <label class="lab">Gender:</label>
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
                  <div class="row3">
                  <label class="lab"> Amount:</label>
                  <input type="text" class="form-control" name="amount" placeholder="br">
                 
                  <label class="lab"> Description:</label>
                  <input type="text" class="form-control" name="description" placeholder="br">
               </div>
         
               
          

            <div class="row4">
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="profileAdmin.php" class="btn btn-danger" class="cancel">Cancel</a>
                  </div>
            </div>
         </form>
      </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
<!-- <style>
body{
   background-color: #f3f3f3;
}
h3{
   margin-top: 70px;
}
   </style> -->