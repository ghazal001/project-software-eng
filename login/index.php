<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	  <div class="form-container sign-in-container">
	<form action="login.php" method="post">
		<h2>Login</h2>
		  <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
		<h3>Enter your personal details and start journey with us</h3>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name" value=<?php echo isset($errors['name']) ? $errors['email'] : ''?> ><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit" name =sb>Login</button>
		<p>you don't have an account? <a href="../signup/index.php" class=link>Sign Up</a></p>
	</form>
		</div>
</body>
</html>