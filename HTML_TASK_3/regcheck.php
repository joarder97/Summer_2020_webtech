<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['name'];
		$email 		= $_POST['email'];
		$userName   = $_POST['userName'];
		$password   = $_POST['password'];
		$confirmPassword   = $_POST['confirmPassword'];

		if(empty($name) || empty($email) || empty($userName) || empty($password) || empty($confirmPassword) ){
			echo "null submission found!";
		}else{
			$_SESSION['name'] 		= $name;
			$_SESSION['email'] 	= $email;
			$_SESSION['userName'] 		= $userName;
			$_SESSION['password'] 		= $password;
			$_SESSION['confirmPassword'] 		= $confirmPassword;

			echo "done!";
		}	

	}




?>