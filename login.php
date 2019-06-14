<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css1.css">

</head>
<body>

	<div class="limiter">
		<div class="container">
			<div class="login">
				<div class="login-pic" data-tilt>
					
				</div>

				<form class="login-form">
					<span class="login-title">
						<h1>NIPTICT</h1>					
					</span>

					<div class="wrap-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input" type="text" name="email" placeholder="Email" required autofocus>
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input" data-validate = "Password is required">
					<input class="input" type="Password" name="pass" placeholder="Password" required autofocus>
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login-form-btn">
						<button class="login-form-btn">
							Login
						</button>
					</div>

					<div class="text-center">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt2">
							Don't have an account?
						</span>
						<a class="txt2" href="register.php">
							Sign Up
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




</body>
</html>