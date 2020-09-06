<?php
    require_once('../service/userService.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    //$con = dbConnection();
    if(empty($email) || empty($password)){
        echo "empty fields found";
    }
    else{
        $con = dbConnection();
        $user_check_query = "SELECT * FROM user WHERE password = '$password' and email = '$email' LIMIT 1";
        $result = $con->query($user_check_query);
        //$row = mysqli_fetch_row($result);
        if($result->num_rows == 0){
            echo "ok";
        }
        else{
            echo "!!";
        }
    }

?>