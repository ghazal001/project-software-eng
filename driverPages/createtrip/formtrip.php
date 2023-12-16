<!DOCTYPE html>

<?php
include('../../connection.php');
if (isset($_SESSION['id'])) {
  header('location:../profileDriver.php');
}
$error="";
if (isset($_POST['submit'])) {
  session_start();
  $id = $_SESSION['id'];
  // echo $id;  
  $from = $_POST['from'];
  $to = $_POST['to'];
  $day = $_POST['day'];
  $time = $_POST['time'];
  $availableNB = $_POST['availableNB'];
  // echo $from ."<br>";
  // echo $to ."<br>";
  // echo $day ."<br>";
  // echo $time ."<br>";
  // echo $availableNB  ."<br>";
  // $getAllTrip = "SELECT * FROM trip";
  // $res = mysqli_query($conn , $getAllTrip);
  // $conf = false;
  // while ($row = mysqli_fetch_array($res)) {
  //   if ($row['fromlocationID'] = $from && $row['tolocationID'] = $to && $row['time'] = $time  && $row['day'] = $day) {
  //     $conf = true;
  //   }
  // }

  // if($conf == false):
  if ($from == $to) {
    $error = "you can't select the same locations";
  }else {
    $query = "INSERT INTO `trip`(`tripID`, `fromlocationID`, `toLocationID`, `time`, `dayID`, `availableNB`, `DriverID`) 
    VALUES (NULL,'$from','$to','$time','$day','$availableNB','$id')";

    mysqli_query($conn , $query);
    
    $_SESSION['insert'] = "insert sucess";
    header("location:../profileDriver.php");
    
  }
  // endif;
}
if (isset($_POST['return'])) {
  header("location:../profileDriver.php");
}

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Create Trip | NEW</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" href="forme.css" />
    <link rel= " stylesheet "href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  </head>
  <body>
        
        <nav class="navbar">
            <h1 class="logo">W'aselni</h1>
            <ul class="nav-links">
                <li class="active"> <a href="#"> Home</a></i></li>
                <li> <a href="#"> Services</a></i></li>
                <li> <a href="#"> ABOUT</a></i></li>
                <li class=""> <a href="#"> Contact-US</a></i></li>
                
            </ul>
        </nav>
 
    <div class="container">
      <h1 class="form-title">Create New Trip</h1>
      <form action="./formtrip.php" method =post >
        <div class="main-user-info">
        <div class="user-input-box">
            <label for="email">From Location</label>
            <!-- <input type="email" id="email" name="email" placeholder="Enter the area"/> -->
            <select name="from" id="">
              <?php
              $query = "SELECT * FROM `location` WHERE 1";
              $res = mysqli_query($conn , $query);
              while ($row = mysqli_fetch_array($res)) {
                echo "<option value=".$row['locationID'].">".$row['locationName']."</option>";
              }
              ?>
            </select>
          </div>
          <div class="user-input-box">
            <label for="to">To Location</label>
            <select name="to" id="">
              <?php
              $query = "SELECT * FROM `location` WHERE 1";
              $res = mysqli_query($conn , $query);
              while ($row = mysqli_fetch_array($res)) {
                echo "<option value=".$row['locationID'].">".$row['locationName']."</option>";
              }
              ?>
            </select>
          </div>
          <div class="user-input-box">
            <label for="time">Choose Time</label>
            <select name="time" id="">
              <?php
              $query = "SELECT * FROM `time` WHERE 1";
              $res = mysqli_query($conn , $query);
              while ($row = mysqli_fetch_array($res)) {
                echo "<option value=".$row['timeId'].">".$row['time']."</option>";
              }
              ?>
            </select>
          </div>
          <div class="user-input-box">


            <!-- <label for="Days">Days</label>
            <select name="from" id="">
              <option value="liu">Monday</option>
              <option value="liu">Tuesday</option>
              <option value="liu">Wednesday</option>
              <option value="liu">Thursday</option> -->

            <label for="Days">Select Day</label>
            <select name="day" id="">
              <?php
              $query = "SELECT * FROM `days` WHERE 1";
              $res = mysqli_query($conn , $query);
              while ($row = mysqli_fetch_array($res)) {
                echo "<option value=".$row['dayID'].">".$row['day']."</option>";
              }
              ?>

            </select>
          </div>
          <div class="user-input-box">
            <label for="availableNB">Available Place</label>
            <select name="availableNB" id="">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
        
        </div>
        <p class = "err"><?php echo $error; ?></p>
        <div class="form-submit-btn">
          <input type="submit" value="Create Trip" name = submit>
          <input type="submit" value="Return" name = return>
        </div>
      </form>
    </div>
  </body>
</html>