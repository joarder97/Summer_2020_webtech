<?php

require_once('../db/db.php');

function create(){
    $con = dbConnection();

    global $id;
    global $password;
    global $confirmPassword;
    global $name;
    global $email;
    global $type;

    $sql = "INSERT INTO user(id,password,confirmPassword,name,email,type) VALUES('".$id."','".$password."','".$confirmPassword."','".$name."','".$email."','".$type."')";

    $result = $con->query($sql);
    if($result){
        echo "User Created. Please Log in to proceed.";
    }
    else{
        echo "SQL error";
    }
}

?>