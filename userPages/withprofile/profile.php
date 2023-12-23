<?php

include ("../../connection.php");
session_start();
$user_id = $_SESSION['id'];

$query = "SELECT * FROM `user` WHERE id = $user_id";
$res = mysqli_query($conn , $query);

$userData = mysqli_fetch_array($res);

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   if ($userData['name'] != $update_name || $userData['name'] != $update_name ):
      # code...
      
   if (!empty($update_name) && !empty($update_email)) {
      # code...
      $nameAndEmailUpdate = "UPDATE `user` SET `name`='$update_name',`email`='$update_email' WHERE id = '$user_id'";
      mysqli_query($conn, $nameAndEmailUpdate) ;
      $message[] = 'username And email update sucessfull';
   }else {
      # code...
      if (!empty($update_name)) {
         $nameUpdate = "UPDATE `user` SET `name`='$update_name' WHERE id = '$user_id'";
         mysqli_query($conn, $nameUpdate) ;
         $message[] = 'username update sucessfull';
      }
      else if(!empty($update_email)){
         $emailUpdate = "UPDATE `user` SET `email`='$update_email' WHERE id = '$user_id'";
         mysqli_query($conn, $emailUpdate) ;
         $message[] = 'email update sucessfull';
      }

   }

   $old_pass = $userData['password'];
   $update_pass = $_POST['old_pass'];
   $new_pass = $_POST['new_pass'];
   $confirm_pass = $_POST['confirm_pass'];

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }else if($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         $Passpattern = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{9,}$/';
         if (!preg_match($Passpattern , $new_pass)) {
            $message[] = 'Password At least 1[A-Z] 1[0-9] and special chars"';
         }else{
            mysqli_query($conn, "UPDATE `user` SET password = '$confirm_pass' WHERE id = '$user_id'") ;
            $message[] = 'password updated successfully!';
         }
      }
   }
            endif;
   // $update_image = $_FILES['update_image']['name'];
   // $update_image_size = $_FILES['update_image']['size'];
   // $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   // $update_image_folder = 'uploaded_img/'.$update_image;

   // if(!empty($update_image)){
   //    if($update_image_size > 2000000){
   //       $message[] = 'image is too large';
   //    }else{
   //       $image_update_query = mysqli_query($conn, "UPDATE `user` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
   //       if($image_update_query){
   //          move_uploaded_file($update_image_tmp_name, $update_image_folder);
   //       }
   //       $message[] = 'image updated succssfully!';
   //    }
   // }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/updateUser.css">

</head>
<body>
   
<div class="update-profile">

   <?php
     
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         // if($fetch['image'] == ''){
         //    echo '<img src="images/default-avatar.png">';
         // }else{
         //    echo '<img src="uploaded_img/'.$fetch['image'].'">';
         // }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_name" value="" class="box" placeholder = "<?php echo $userData['name']; ?>">
            <span>your email :</span>
            <input type="email" name="update_email" placeholder= "<?php echo $userData['email']; ?>" class="box">
            <span>update your pic :</span>
            <input type="file" name="update_image"  accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $userData['password']; ?>">
            <span>old password :</span>
            <input type="password" name="old_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="../profileUser.php" class="delete-btn">go back</a>
   </form>

</div>

</body>
</html>