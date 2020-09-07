<?php
    session_start(); 

    require_once('../service/userService.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    //$con = dbConnection();
    if(empty($email) || empty($password)){
        echo "empty fields found";
    }
    else{
       $status = validate();
       
		if($status){
            //echo "done";
			$_SESSION['email'] = $email;
			header('location: ../views/adminHome.php');
		}else{
            //header('location: ../views/login.php');
            echo "!!";
		}
    }

?>