<?php 
include('../connection.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link rel="stylesheet" href="./profilee.css">
    <link rel= " stylesheet "href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<style>
   
    </style>
<body>
        <nav class="navbar">
            <h1 class="logo"> W'aselni</h1>
            <ul class="nav-links">
                <li class="active"><a href="#"></a>Home</li>
                <li class="active"><a href="#"></a>Services</li>
                <li class="active"></i><a href="#"></a></i>ABOUT</li>
                <li class="active"><a href="#"></a></i>Contact-US</li>
            </ul>
        </nav>
        
        <!-- <P class="img"><img src="dada.jpg"></p> -->
        <div class="container">
              <?php
                include("./home.php");
            ?>
             
            <div class="table">
            <p><a href="../showtrip/showtrip.php" class="trips">find trips</a></p>
    <main class="table">
     
        <section class="table__header">
            <h1>Customer's - W'aselni</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div>
            
        </section>
        
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Driver </th>
                        <th> From </th>
                        <th> To </th>
                        <th> Schedule </th>
                        <th> Leave </th>
                        <!-- <th> .. <span class="icon-arrow">&UpArrow;</span></th> -->
                        <!-- <th> Amount <span class="icon-arrow">&UpArrow;</span></th> -->
                    </tr>
                </thead>
              
                <tbody>
                    <!-- Available // Full -->
                    <tr>
                        <?php
                        $id=$_SESSION['id'];
                        
                        include('../connection.php');
                        $query = "SELECT
                            r.* ,
                            t.tripID,
                            d.day,
                            tm.time,
                            l_from.locationName AS fromLocationName,
                            l_to.locationName AS toLocationName,
                            driver.username AS driverName
                        FROM
                            reservetrip r
                        JOIN
                            trip t ON r.tripID = t.tripID
                        JOIN
                            days d ON t.dayID = d.dayID
                        JOIN
                            time tm ON t.time = tm.timeId
                        JOIN
                            location l_from ON t.fromlocationID = l_from.locationID
                        JOIN
                            location l_to ON t.toLocationID = l_to.locationID
                        JOIN
                            user driver ON t.DriverID = driver.id
                        WHERE
                            r.studentID = $id";
                        
                        $res = mysqli_query($conn , $query);

                        while ($row = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>".$row['driverName']."</td>";
                            echo "<td>".$row['fromLocationName']."</td>";
                            echo "<td>".$row['toLocationName']."</td>";  
                            echo "<td>".$row['day']." ".$row['time']."</td>";  
                            echo "<td><a href=canceltrip.php?reservationID=".$row['reservationID']."&tripID=".$row['tripID']."><i class='fa fa-trash-o' aria-hidden='true'></i></a></td>";
                            echo "</tr>";
                        }
                        
                        ?>
                        
                    </tbody>
                </table>
                <!-- <p><a href="../showtrip/showtrip.php" class="trips">find trips</a></p> -->
            
        </section>
         
    </main>
     
    </div>  

    
</div>
 
    </body>
    

</html>


