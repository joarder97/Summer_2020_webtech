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
        global $loginBtn;

        $sql = "INSERT INTO user(id,password,confirmPassword,name,email,type) VALUES('".$id."','".$password."','".$confirmPassword."','".$name."','".$email."','".$type."')";
        $result = $con->query($sql);

        if($result){
            //id created
            echo "User Created. Please Log in to proceed.";
            //$loginBtn = "visible";
            //return $loginBtn;
        }
        else{
            echo "SQL error";
        }
    }

    //validation 
    function validate(){
        $con = dbConnection();

        global $password;
        global $email;

        $user_check_query = "SELECT * FROM user WHERE password='".$password."' and email='".$email."' LIMIT 1";
        $result = $con->query($user_check_query);
        //$row = mysqli_fetch_assoc($result);
        //$rowcount=mysqli_num_rows($result);
        $row = mysqli_fetch_row($result);
        if($row == 1){
            return true;
        }
        else{
           return false;
        }
    }

?>