<?php 

session_start(); 
include('../connection.php');

if (isset($_POST['sb'])) {
	// echo"sub";
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);			
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
		exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM user WHERE `username`='$uname' AND `password`='$pass'";

		$result = mysqli_query($conn, $sql);

		
			$row = mysqli_fetch_array($result);
            if ($row['username'] == $uname && $row['password'] == $pass) {
				session_start();
				$_SESSION['username'] = $row['username'];
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['role'] = $row['role'];
					
				header("Location:home.php");
				exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
				exit();
			}
		
	}
	
}else{
	header("Location: index.php");
	exit();
}