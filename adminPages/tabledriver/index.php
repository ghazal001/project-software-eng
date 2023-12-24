<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./branchstyle.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->


  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

  <title>PHP |DMZ| Application</title>
</head>

<body>
  <nav class="navbar">
    Branches Of Donations
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="color:white; padding:10px 15px;">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <main class="table">
    <div class="butt">
    <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>
    <a href="../profileAdmin.php" class="btn btn-dark mb-3">return</a>
    </div>
    <div class="table">
    <section class="table_body">
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <!-- <th scope="col"></th>
          <th scope="col">adminid</th> -->
          <th scope="col">name</th>
          <th scope="col">admin</th>
          <th scope="col">location</th>
          <th scope="col">records</th>
          <th></th>
          <th> </th>
          
        </tr> 
      </thead>
      <tbody >
        <?php
        $sql = "SELECT * FROM `branch`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {


          echo "<tr>";
          // echo "<td>".$row['id']."</td>";
          echo "<td>".$row['name']."</td>";
          echo "<td>".$row['adminid']."</td>"; 
          echo "<td>".$row['location']."</td>";
          echo "<td>".$row['records']."</td>";
          
          echo "<td>
          <a href=edit.php?id=".$row["id"]." class='link-dark'><i class='fa-solid fa-pen-to-square fs-5 me-3'></i></a>
          <a href=delete.php?id=".$row["id"]." class='link-dark'><i class='fa-solid fa-trash fs-5'></i></a>
        </td>";
        echo "<tr>";
      }
        ?>  
        

      
      </tbody>
    </table>
    </section>
    </main>
  </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>