<?php 
include('../connection.php');
include('./signup.php');
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./signinstylee.css">
  </head>
  <body>
      <div id="form">
            <h1 id="heading">Welcom Back  </h1><br>
            
            <form name="form" action="./index.php" method=post>

                <i class="fa fa-user fa-lg"></i>
                <input type="text" id="user" name="username" placeholder="Enter Username"  > <br>
                <span class="error"><?php echo isset($errors['username']) ? $errors['username'] : '' ?></span>
                <br>
                

                <i class="fa-solid fa-envelope fa-lg"></i>
                <input type="email" id="email" name="email" placeholder="Enter Email" ><br>
                <span class="error"><?php echo isset($errors['email']) ? $errors['email'] : '' ?></span>
                <br>


                <i class="fa-solid fa-lock fa-lg"></i>
                <input type="password" id="pass" name="password" placeholder="Create Password" ><br>
                <span class="error"><?php echo isset($errors['password']) ? $errors['password'] : '' ?></span>
                <br>

                <i class="fa-solid fa-lock fa-lg"></i>
                <input type="password" id="cpass" name="cpass" placeholder="Retype Password" ><br>
                <span class="error"><?php echo isset($errors['cpassword']) ? $errors['cpassword']: '' ?></span>
                <br>

                <label for="branch">Select your Branch:</label>

        <select name="branch" id="branch">
            <?php
                $query = "SELECT * FROM `branch` ";

                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=".$row["branch"].">".$row['branch']."</option>";
                }
            ?>
        </select></br></br>


        <label for="rol">Select Categorie :</label>
        <select name="rol" id="rol">
        <?php
                $query = "SELECT * FROM `role` ";

                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=".$row["role"].">".$row['role']."</option>";
                }
            ?>
        </select></br></br>
        
                <input type="submit" id="btn" value="SignUp" name = "sb"/>
            </form>
            <p class="login">Already have an accont ?<a href="../login/index.php">Log In</a></p>
      </div>
      <?php
      
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>