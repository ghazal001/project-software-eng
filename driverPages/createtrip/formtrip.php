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
  $ida = $_POST['adminid'];
  $name= $_POST['name'];
  $location = $_POST['location'];
  $records = $_POST['records'];
  $query = "INSERT INTO `branch`(`id`, `adminid`, `name`, `location`, `records`) 
    VALUES (NULL,'$ida','$name','$location','$records')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['insert'] = "insert success";
        header("location:../profileDriver.php");
        exit();
      } else {
        $error = "Error: " . $query . "<br>" . mysqli_error($conn);
      }
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
          <link rel="stylesheet" href="formesss.css" />
          <link rel= " stylesheet "href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        </head>
        <body>
              
              <nav class="navbar">
                  <h1 class="logo">Give & Thrive</h1>
                  <ul class="nav-links">
                      <li class="active"> <a href="#"> Home</a></i></li>
                      <li> <a href="#"> Services</a></i></li>
                      <li> <a href="#"> ABOUT</a></i></li>
                      <li class=""> <a href="#"> Contact-US</a></i></li>
                      
                  </ul>
              </nav>
              
    <div class="container">
      <h1 class="form-title">Add New Branch </h1>
      <form action="./formtrip.php" method =post >
        <div class="main-user-info"> 
        <div class="user-input-box1">
        <label for="adminid">AdminID:
            <input name="adminid" type="text"></label></div>
        <div class="user-input-box2">
        <label for="name">Name: 
              <input name="name" type="text"></label></div>
        <div class="user-input-box3">      
        <label for="">Location:
            <input name="location" type="text"></label></div>
        <div class="user-input-box4">
            <label for="time">Records:
            <input name="records" type="text"></label></div> 
            <p class = "err"><?php echo $error; ?></p>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Add Branch" name = submit>
          <input type="submit" value="Return" name = return>
        </div>       

      </form>
      </div>