<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td>Id</td>
                </tr>
                <tr>
                    <td><input type="text" name="id" value=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login" name="logBtn">
                        <a href="reg.php">Register</a>
                    </td>
                </tr>


            </table>
        </fieldset>
    </form>
</body>
</html>


<?php
    if(isset($_POST["logBtn"])) 
    {
        $id = $_POST["id"];
        $password = $_POST["password"];
        if(empty($id) || empty($password))
        {
            echo "empty input found";
        }
        else 
        {
            $file = fopen("Info.txt",'r');
            while(!feof($file)) {
                $data = fgets($file);
                $user = explode('|', $data);

                if($id == trim($user[0]) && $password == trim($user[1])) {
                    echo "login Successful";
                    break;
            }
                else {
                    echo "username/password wrong";
                }

            }
        }
    }
?>