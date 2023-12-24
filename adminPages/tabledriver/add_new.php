<?php
include "./connection.php";
if (isset($_POST["submit"])) {
$adminid = $_POST['adminid'];
$name = $_POST['name'];
$location = $_POST['location'];
$records = $_POST['records'];


$sql = "INSERT INTO `branch`(`adminid`, `name`,`location`,`records`)
 VALUES ('$adminid','$name','$location','$records')";

$result = mysqli_query($conn, $sql);

if ($result) {
header("Location: index.php?msg=New record created successfully");
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
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
   <link rel="stylesheet"href="./addnewstyle.css">
   <!-- Font Awesome -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

   <title> </title>
</head>

<body>
         <h3 class="her">Add a Branch: </h3>
         <p class="her">Complete the form below to add a new branch</p>
   <div class="container">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="all">
               <div class="row1">
                  <label class="lab">Adminid:</label>
                  <select name="adminid" id=""
                    class="form-control" name="adminid" placeholder="name"> 
                     <?php
                     $getAdmin = "SELECT * FROM `admin` WHERE 1";
                     $getAdminRes = mysqli_query($conn , $getAdmin);
                     while ($row = mysqli_fetch_array($getAdminRes)) {
                        # code...
                        echo "<option value=".$row['adminid'].">".$row['admin']."</option>";
                     }
                     ?>
               
                  </select>
                  

                  <label class="lab"> Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="name">
                 
               </div>
               
             

            <div class="row2">
               <label class="lab">Location:</label>
               <select name="location" id="" class="form-control">
               
                     <?php
                     $getAdmin = "SELECT * FROM `location` WHERE 1";
                     $getAdminRes = mysqli_query($conn , $getAdmin);
                     while ($row = mysqli_fetch_array($getAdminRes)) {
                        # code...
                        echo "<option value=".$row['locationid'].">".$row['locationname']."</option>";
                     }
                     ?>
                  </select>
            
               
            
               <label class="lab">Records:</label>
               <select name="records" id="" class="form-control">
               <?php
               $getAdmin = "SELECT * FROM `records` WHERE 1";
               $getAdminRes = mysqli_query($conn , $getAdmin);
               while ($row = mysqli_fetch_array($getAdminRes)) {
                  # code...
                  echo "<option value=".$row['recordsid'].">".$row['recordsN']."</option>";
               }
               ?>
            </select>
               &nbsp;
               
            </div>
          

            <div class="row3">
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
            </div>
         </form>
      </div>

   <!-- Bootstrap -->
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