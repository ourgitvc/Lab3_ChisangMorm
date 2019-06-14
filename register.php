<!DOCTYPE html>
<html>
<head>
	<title>NIPTICT</title>
	<?php include 'link_src.php'; ?>
</head>
<body>
	<div class="form">
		<h1 align="center">NIPTICT</h1>
		<h4 align="center">Sign in to start your seesion</h4>
		
		<form action="" method="post">
			<input type="txt" placeholder="First name" name="Firstname" required>
			<input type="txt" placeholder="Last name" name="Lastname" required>
			<div class="form-check form-check-inline">
			  <label class="form-check-label">Gender</label>
			</div>
			<div class="form-check form-check-inline gender">
			  <input class="form-check-input" type="radio" id="male" value="Male" name="Gender">
			  <label class="form-check-label" for="male">Male</label>
			</div>
			<div class="form-check form-check-inline gender">
			  <input class="form-check-input" type="radio" id="female" value="Female" name="Gender">
			  <label class="form-check-label" for="female">Female</label>
			</div>
			<input type="txt" placeholder="User Name" name="Username" required style="margin-top: 10px;">
			<input type="txt" placeholder="example@example.com" name="Email" required>
			<input type="Password" placeholder="Password" name="Password" required>
			<input type="submit" value="Register" name="Register" style="margin-top: 0px;">
		</form>
	</div>
	<?php require 'register_func.php'; ?>
</body>
</html>