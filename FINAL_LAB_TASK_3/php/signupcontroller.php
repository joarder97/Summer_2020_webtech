<?php

    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    
   if(empty($id) || empty($password) || empty($confirmPassword) || empty($name) || empty($email) || empty($type)){
   		echo "Empty fields found";
   }

?>