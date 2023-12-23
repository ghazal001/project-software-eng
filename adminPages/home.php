<?php
include('../connection.php');
?>
<head>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="./withprofile/css/homeStyle.css">
</head>
      <div class="profile">
         <?php
         $user_id =$_SESSION['id'] ;
            $query =  "SELECT * FROM `user` WHERE id = '$user_id'";
            $res = mysqli_query($conn,$query);
            $userData = mysqli_fetch_array($res);
            // if($fetch['image'] == ''){
            //    echo '<img src="images/default-avatar.png">';
            // }else{
            //    echo '<img src="uploaded_img/'.$fetch['image'].'">';
            // }
            ?>
            <img src="./withprofile/images/default-avatar.png" alt="">

         <h3> Welcome back , <?php echo $userData['name']; ?></h3>
         <a href="./withprofile/profile.php" class="btn">update profile</a>
         <a href="home.php?logout=<?php //echo $user_id; ?>" class="delete-btn">logout</a>
         <!-- <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p> -->
      </div>

      <?php
      
if(isset($_GET['logout'])){
   session_start();
   session_destroy();
   unset($_GET);
   header('location:../login/');
}
      ?>



