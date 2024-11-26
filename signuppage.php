<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIGNUP PAGE</title>
			<link rel="stylesheet" href="css/stylesignup.css">
</head>
	<body>
		<img src="images/logo.png" class="">
		<section class="form signup">
			<form action ="#">
				<div class="box">
					<h1>SIGNUP</h1>
<!--error msg box-->
					<div class="error-msg"></div>
<!--username textbox-->
						<div class="text1">
							<input type="text" name="username" class="alltextbox" placeholder="Enter the Username" required><br>
						</div>
<!--Email textbox-->
						<div class="text2">
							<input type="emailid" name="emailid" class="alltextbox" placeholder="Enter the EmailId" required><br>
						</div>
<!--password textbox-->
						<div class="text3">
							<input type="password" name="password" class="alltextbox" placeholder="Enter the password" required><br>
						</div>
<!--re-enter password textbox-->
						<div class="text4">
							<input type="password" name="repassword" class="alltextbox" placeholder="Enter the password again" required><br>
						</div>
<!--signup button-->
						<div class="button1">
							<input type="submit" name="submit" class="button" href="" value="SIGNUP">
						</div>
<!--login page link-->
						<div>
							<p class="logintext">Already have an account?<a href="loginpage.php">Login</a></p>
						</div>

				</div>
			</form>
		</section>
			
			<script src="js/signup.js"></script>
	</body>
</html>