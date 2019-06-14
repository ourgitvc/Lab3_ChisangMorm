<!DOCTYPE html>
<html>
<head>
	<title>NIPTICT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
</head>

<body>
	
	<div class="form">
		<h1 align="center">NIPTICT</h1>
		<h4 align="center">Sign in to start your seesion</h4>
		<form action="login.php" method="post">
			<input type="text" name="2id" value="<?php echo $_SESSION["id"] ?>">
			<input type="text" name="1name" value="<?php echo $_SESSION["fname"] ?>">
			<input type="text" name="2name" value="<?php echo $_SESSION["lname"] ?>">
			<input type="text" name="gen" value="<?php echo $_SESSION["gen"] ?>">
			<input type="text" name="username" value="<?php echo $_SESSION["user"] ?>">
			<input type="text" name="pass" value="<?php echo $_SESSION["password"] ?>">
			<input type="text" name="img" value="<?php echo $_SESSION["proimg"]; session_destroy();?>">
			<input type="submit" name="submit1" value="logout">
			
		</form>
	</div>


</body>
</html>