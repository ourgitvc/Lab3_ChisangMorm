<?php
		$link = mysqli_connect('localhost', 'root','root', 'raw_php_login_register');
		if (!$link) {
			die("Connection failed:".mysqli_connect_error());
		}
		// echo "connection successfully";
		?>