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
    <link rel="stylesheet" href="./tripolii.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title> </title>
</head>
<body>
        <div class="page">
        <nav class="navbar">
            <h1 class="logo"> Give & Thrive</h1>
            <ul class="nav-links">
                <li class="active"></i><a href="/index.php"></a></i>Home</li>
                <li class="active"></i><a href="#"></a>feedback</li>
                <li class="active"></i><a href="#"></a></i>ABOUT</li>
                <li class="active"><a href="../contactform/contact.php">Contact-US</a></li>
            </ul>
        </nav>
        <!-- <P class="img"><img src="dada.jpg"></p> -->
        <div class="container">
            <div class="table">
                
                <!-- <a href="./triprequest/triprequest.php " class="tripR" >Trip Request <?php echo "($nb)"; ?></a> -->
    <main class="table">
        <section class="table__header">
            <h1>Tripoli Branch </h1>
            <a href="../donation.php">Donation for people </a>
            <!-- <a href="./addneworphan.php">Add Orphan</a>
            <a href="./tabledriver/index.php" class='newtrip'>Add a branch </a> -->
            <!-- <a href="#"  class="trip">Your Trips</a> -->

        </section>
    
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> age </th>
                        <th> gender </th>
                        <th> Location</a></th>
                        <th> amount</th>
                        <th> description</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $sql = "SELECT addorphan.*, location.locationname
                    FROM addorphan
                    JOIN location ON addorphan.locationID = location.locationid
                    WHERE addorphan.locationID = 3";
        //             $sql = "SELECT addorphan.*, location.locationname
        // FROM addorphan
        // JOIN location ON addorphan.locationID = location.locationid";

 
             
                     $res = mysqli_query($conn ,$sql);
                    
                    while($row = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$row['nameorphan']."</td>";
                        echo "<td>".$row['age']."</td>";
                        echo "<td>".$row['gender']."</td>";
                        echo "<td>".$row['locationname']."</td>";
                        echo "<td>".$row['amount']."</td>";
                        echo "<td>".$row['description']."</td>";
                            

                        // echo "<td>
                        // <a href=edit.php?id=".$row["idorphan"]." class='link-dark'><i class='fa-solid fa-pen-to-square fs-5 me-3'></i></a>";
                    //     <a href=deletetripoli.php?id=".$row["idorphan"]." class='link-dark'><i class='fa-solid fa-trash fs-5'></i></a>
                    //   </td>";
                    //   echo "<tr>";
                    }
                    
                    
                    ?>
</tbody>
            </table>
        </section>
</main>
</div>
</body>
</html>
