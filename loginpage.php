<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN PAGE</title>
			<link rel="stylesheet" href="css/stylesignup.css">
</head>
	<body>
	<img src="images/logo.png" class="">
		<section class="form login">
		<form action="#" autocomplete="off">
			<div class="box">
				<h1>LOGIN</h1>
				<div class="error-msg"></div>
<!--Email textbox-->
				<div class="text2">
							<input type="emailid" name="emailid" class="alltextbox" placeholder="Enter the EmailId" required><br>
						</div>
<!--password textbox-->
						<div class="text3">
							<input type="password" name="password" class="alltextbox" placeholder="Enter the password"required><br>
						</div>
<!--signup button-->
						<div class="button1">
							<input type="submit" name="submit" class="button"  value="Login">
						</div>
<!--login page link-->
						<div>
							<p class="logintext">Create an account?<a href="signuppage.php">Signup</a></p>
						</div>
			</div>
		</form>
		</section>
		<script src="js/login.js"></script>
	</body>
</html>