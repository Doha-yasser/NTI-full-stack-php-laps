<?php
    // connection with Database
    /**
     * (server , username , password)
     * create a connection
     * check connnection
     */

    // 1) ...
    $server = 'localhost';
    $userName = 'root';
    $password = '';

    // should select database for create , delete...
    $dbName = 'mydb';
    $tName = 'users';

    $con = mysqli_connect($server, $userName, $password , $dbName);

    if ($con) {
        echo 'Connect successfullt! <br><br>';
        
    }

?>