<?php
    $host = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "f1";

    function dbConnection(){
        global $host;
        global $dbUser;
        global $dbPass;
        global $dbName;

        return $conn = mysqli_connect($host, $dbUser, $dbPass, $dbName);
    }
?>