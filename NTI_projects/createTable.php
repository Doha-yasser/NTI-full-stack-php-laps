<?php
    include('connect/db.php');

    // query for create table
    $table = "CREATE TABLE IF NOT EXISTS users(
        id int(6) primary key AUTO_INCREMENT ,
        username varchar(50) NOT NULL,
        email varchar(50) NOT NULL,
        password varchar(50) NOT NULL,
        reg_date TIMESTAMP DEFAULT current_timestamp
    )";


    // query with db
    $tQuery = mysqli_query($con, $table);


    // check
    if($tQuery){
        echo "Table created successfully";
    }
    else{
        echo "something is wrong";
    }

?>