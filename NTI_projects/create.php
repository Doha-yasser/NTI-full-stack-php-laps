<?php

    include('connect/db.php');
    
    // create DB 
    $query = "CREATE DATABASE IF NOT EXISTs mydb";

    // check creation
    if(mysqli_query($con , $query)){
        echo "Database created <br><br>";
    }
    else{
        echo "something wrong <br><br>";
    }

?>