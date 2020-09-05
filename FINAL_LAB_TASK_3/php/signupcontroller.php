<?php
	require_once('../service/userService.php');

	$id = $_POST['id'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$type = $_POST['type'];

	//query for check multiuser 
	$con = dbConnection();
	$user_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
	$result = $con->query($user_check_query);
	$row = mysqli_fetch_row($result);

	//validation
	if(empty($id) || empty($password) || empty($confirmPassword) || empty($name) || empty($email) || empty($type)){
		echo "empty fields found";
	}
	elseif($row>=1){
		echo "email exists";
	}
	elseif($password != $confirmPassword){
		echo("Passwords does not match");
	}
	else{
		//User created
		create();
		//$loginBtn = "visible";
	}

?>