<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form>
        <fieldset>
            <legend>Login Form</legend>
            Email: <input type="email" name="email" id="email"><br><br>
            Password: <input type="password" name="password" id="password"><br><br>
            <input type="button" name="login" id="login" value="login" onclick="loginUser()"><br><br>
            <div id="errors"></div>
        </fieldset>
    </form>
    <script type="text/javascript" src = "../assets/js/login.js"></script>
</body>
</html>