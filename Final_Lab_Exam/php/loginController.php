<?php
    //session_start(); 

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
            session_start(); 
            $_SESSION['email'] = $email;
            header('location: ../views/adminHome.php');
        }
        else{
            echo "!!";
            
        }
        
    }

?>