<?php
    include('../connection.php');

    $errors = array(
    /* 'username' => "",
    'email' => "",
    'password' => "",
    'cpassword' => "", */
    );
    $Namepattern = '/^[^0-9]+$/';
        
    $Passpattern = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{9,}$/';
    if (isset($_POST['sb'])) {
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
        $gender=mysqli_real_escape_string($conn,$_POST["gender"]);
        $rol=mysqli_real_escape_string($conn,$_POST["rol"]);

        

        
        
        $sql = "SELECT * FROM `user` WHERE `username` = '$username' ";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result);  

        $sql = "SELECT * FROM `user` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $sql);        
        $count_email = mysqli_num_rows($result);  
        #####################################################################################
        
        setcookie('username' , $username , 86400+time());
        //Verifie data  :


        //Verifie Name
        if (empty($username)) {
            $errors['username'] = "please enter your first name";

        }else if (!preg_match($Namepattern , $username)) {
            $errors['username'] = "name not match";
        }else if($count_user > 0){
            $errors['username'] = "username already exist";
        }

        //Verifie email
        if (empty($email)) {
            $errors['email'] = "please enter your email";
        }else if (!filter_var( $email , FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "email not match";
        }else if($count_email > 0){
            $errors['email'] = "email already exist";
        }
        //Verifie Pass
        if (empty($password)) {
            $errors['password'] = "please enter a password";
        }else if (!preg_match($Passpattern , $password)) {
            $errors['password'] = "Password At least 1[A-Z] 1[0-9] and special chars";
        }
        #Confirm Pass
        if (empty($cpassword)) {
            $errors['cpassword'] = "please confirm your password";
        }else if ($cpassword !== $password) {
            $errors['cpassword'] = "password not match";
        }
        //End data validation

// $count_user == 0 && $count_email==0
        if(count($errors) <= 0){  
            
            if($password == $cpassword || $username!="" || $email !="") {
    
                // Password Hashing is used here. 
                $hash = password_hash($password, PASSWORD_DEFAULT);
                //insert query
                $sql = "INSERT INTO `user` (`id`, `username`, `gender`, `password`, `role`, `email`) 
                VALUES (NULL, '$username', '$gender', '$password', '$rol', '$email');";

                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    unset($_POST);
                    header("location:../login/index.php"); 
                    exit();
                }
            } 
        }  
    }
    ?>