<?php
include('connect/db.php');
// include('')
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['mail'] = $mail;

    $insert = "INSERT INTO users(username , password , email) VALUES ('$username' , '$password' , '$mail')";

    if (mysqli_query($con, $insert)) {
        echo "user added";
        echo "<script> window.location.href = 'profile.php' </script>";
    }

}

?>