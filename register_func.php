<?php
	include 'connect.php';
	    if(isset($_POST['Register'])){
        			# code...
	       $sql_insert = "INSERT INTO users (Firstname, Lastname, Gender, Username, Email, Password)
        		VALUES (
        		'".$_POST["Firstname"]."',
        		'".$_POST["Lastname"]."',
                        '".$_POST["Gender"]."',
        		'".$_POST["Username"]."',
        		'".$_POST["Email"]."',
        		'".$_POST["Password"]."')";

                $sql_check = "SELECT Firstname, Lastname FROM users WHERE 
                Firstname = '".$_POST["Firstname"]."' AND  Lastname = '".$_POST["Lastname"]."'";
        		if (mysqli_query($link, $sql_check)) {
        			# code...
        			echo "This acc already in DB!";
        		}
        		else {
                                if (mysql_query($link, $sql_insert)) {
                                        # code...
                                        header('http://localhost/Lab3/detail.php');
                                }
                                else {
                                        echo "Sorry something Error!".mysqli_error($link);
                                }
        			// echo "Insert unsuccessfully!".mysqli_error($link);
        		}}mysqli_close($link);?>