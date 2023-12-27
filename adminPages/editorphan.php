<?php
include "../connection.php";

$id = $_GET["idorphan"];

if (isset($_POST["submit"])) {
    $nameorphan = $_POST['nameorphan'];
  $age = $_POST['age'];
  $gender=$_POST['gender'];
  $location=$_POST['location'];
$amount=$_POST['amount'];
$desc = $_POST['description'];
  
$sql = "UPDATE `addorphan` SET
        `nameorphan` = '$nameorphan',
        `age` = $age,
        `gender` = '$gender',
        `amount` = $amount,
        `description` = '$desc',
        `locationID` = $location
        WHERE `idorphan` = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: profileAdmin.php?msg=Data updated successfully");
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
  <link rel="stylesheet" href="./editorphan.css">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

  <title> </title>
</head>

<body>

  
      <h3 class="her" >Edit Orphan</h3>
      <p class="her">Click update after changing any information</p>

    <div class="container">
      <form action=""method="post">
        <div class="all">
    <?php
    $sql = "SELECT * FROM `addorphan` WHERE `idorphan` =  $id";
    $result = mysqli_query($conn, $sql);
    $orph = mysqli_fetch_assoc($result);
    ?>

    <div class="row1">
      <form action="" method="post" style="width:50vw; min-width:300px;">
            <label class="lab">Name:</label>
            <input type="text" class="form-control" name="nameorphan" value="<?php echo $orph['nameorphan'] ?>">
    
          <label class="lab">age:</label>
          <input type="text" class="form-control" name="age" value="<?php echo $orph['age'] ?>">

        <!-- <div class="form-group mb-3">
          <label>Gender:</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($orph["gender"] == 'male') ? "checked" : ""; ?>>
          <label for="male" class="form-input-label">Male</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($orph["gender"] == 'female') ? "checked" : ""; ?>>
          <label for="female" class="form-input-label">Female</label>
        </div> -->
        
          <label class="lab">gender:</label>
          <input type="to" class="form-control" name="gender" value="<?php echo $orph['gender'] ?>">
    
        
          <label class="lab">branch_name:</label>
          <select name="location" id="" class="form-control">
            <?php
              $loc  =$orph['locationID'];
              $sql = "SELECT *
              FROM location
              WHERE NOT locationid = $loc
               ";
              $result = mysqli_query($conn, $sql);

              while ($row= mysqli_fetch_array($result)) {
                echo "<option value=".$row['locationid'].">".$row['locationname']."</option>";
              }
            ?>
          </select>
        </div>
        <div class="row2">
          <label class="lab">amount</label>
          <input type="number" class="form-control" name="amount" value="<?php echo $orph['amount'] ?>">

          <label class="lab">description</label>
          <input type="text" class="form-control" name="description" value="<?php echo $orph['description'] ?>">
        </div>
        

        <div class="row4">
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="profileAdmin.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>