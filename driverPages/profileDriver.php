<?php 
include('../connection.php');
session_start();
$id = $_SESSION['id'];
?>

<!-- // $query = "SELECT 
//             user.id,
//             user.name,
//             branch.id,
//             branch.name AS branch_name,
//             location.locationName AS location,
//             branch.records
//           FROM
//             user
//           JOIN branch ON user.id = branch.adminid
//           JOIN location ON branch.location_id = location.locationID
//           WHERE user.id = $id";


// ?> -->
<!-- 
// $res = mysqli_query($conn, $query);
 

// while ($row = mysqli_fetch_array($res)) {
//     echo "<tr>";
//     echo "<td>".$row['name']."</td>"; // Use 'name' instead of 'user.name'
//     echo "<td>".$row['location']."</td>";  
//     echo "<td>".$row['records']."</td>";  
//     echo "<td><a href='editBranch.php?branchID=".$row['id']."'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>";
//     echo "<td><a href='deleteBranch.php?branchID=".$row['id']."'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td>";
//     echo "</tr>";
}
?>
    -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link rel="stylesheet" href="./profiles.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel= " stylesheet "href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
        /* .navLINK{
            color:white;
        } */
    </style>
</head>
 
  <body>
        <div class="page">
        <nav class="navbar">
            <h1 class="logo"> Give & Thrive</h1>
            <ul class="nav-links">
                <li class="active"></i><a href="#"></a></i>Home</li>
                <li class="active"></i><a href="#"></a>Services</li>
                <li class="active"></i><a href="#"></a></i>ABOUT</li>
                <li class="active"><a href="../contactform/contact.php">Contact-US</a></li>
            </ul>
        </nav>
        <!-- <P class="img"><img src="dada.jpg"></p> -->
        <div class="container">
            <?php
                include("./home.php");
            ?>
            
            <div class="table">
                <!-- <a href="./triprequest/triprequest.php " class="tripR" >Trip Request <?php echo "($nb)"; ?></a> -->
    <main class="table">
        <section class="table__header">
            <h1>Branch </h1>
            <a href="./addorphan.php">Add Orphan</a>
            <a href="./tabledriver/index.php" class='newtrip'>Add a branch </a>
            <!-- <a href="#"  class="trip">Your Trips</a> -->

        </section>
    
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <!-- <th> From </th>
                        <th> To </th>
                        <th> Schedule </th>
                        <th> available space </th>
                        <th> Show Students</th>
                        <th> Edit</th>
                        <th> Delete</th> -->

                        <th> Name </th>
                        <th> age </th>
                        <th> gender </th>
                        <th> branch name</a></th>
                        <th> amount</th>
                        <th> description</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <!-- Available // Full -->
                    <tr>
                        <?php 
                       $query ="SELECT profiledriver.name, addorphan.nameorphan, addorphan.age
                       FROM profiledriver
                       JOIN addorphan ON profiledriver.id = addorphan.branchID";
                    //    $res = mysqli_query($conn, $query);
                        ?> 
                  
            <!-- // $query = "SELECT
        // --     branch.id,
        // --     branch.name,
        // --     location.locationName AS location,
        // --     branch.records,
        // --     user.username AS adminUsername
        // --   FROM
        // --     branch
        // --   JOIN location ON branch.location_id = location.locationID
        // --   JOIN user ON branch.adminid = user.id"; -->
        <?php 
 

// $query = "SELECT 
//             user.id,
//             user.name,
//             branch.id,
//             branch.name AS branch,
//             location.namelocation AS location,
//             branch.records
//           FROM
//             user
//           JOIN branch ON user.id = branch.adminid
//           JOIN location ON branch.location = idlocation
//           WHERE user.id = $id";

// $res = mysqli_query($conn, $query);
?>

<?php
// $res = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo "<td>".(isset($row['idorphan']) ? $row['idorphan'] : "")."</td>";
    echo "<td>".(isset($row['nameorphan']) ? $row['nameorphan'] : "")."</td>";  
    echo "<td>".(isset($row['age']) ? $row['age'] : "")."</td>";  
    echo "<td>".(isset($row['gender']) ? $row['gender'] : "")."</td>";
    echo "<td>".(isset($row['branchname']) ? $row['branchname'] : "")."</td>";  
    echo "<td>".(isset($row['amount']) ? $row['amount'] : "")."</td>";  
    echo "<td><a href='editBranch.php?branchID=".$row['id']."'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>";
    echo "<td><a href='deleteBranch.php?branchID=".$row['id']."'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td>";
    echo "</tr>";
}
?>
                        
                        
                </tbody>
        </table>
    </section>
</main>
</div>
    </body>
    
            
</html>


