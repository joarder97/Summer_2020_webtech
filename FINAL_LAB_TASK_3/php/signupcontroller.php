<?php
	require_once('../service/userService.php');
	$error = array();

	$id = $_POST['id'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$type = $_POST['type'];


	if(empty($id) || empty($password) || empty($confirmPassword) || empty($name) || empty($email) || empty($type)){
		echo "empty fields found";
		array_push($error, "Field empty Error");
	}

	$con = dbConnection();
	$user_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
	//$result = mysqli_query($con, $user_check_query);
	//$user = mysqli_fetch_row($result);
	$result = $con->query($user_check_query);
	if(!$result){
		create();

	}
	else{
		echo "email exists";
			array_push($error, "email Error"); 
	}

?>