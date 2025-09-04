<?php
include('connect/db.php');
session_start();
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $_SESSION['username'] = $_POST['username'];
//     $_SESSION['mail'] = $_POST['mail'];
//     $_SESSION['password'] = $_POST['password'];
// }


$email = $_SESSION['mail'];


// select data
$data = "SELECT * FROM users where  email= '$email'";


$result = mysqli_query($con, $data);
$row = mysqli_fetch_assoc($result);



if ($result && mysqli_num_rows($result) > 0) {
    echo "username: " . $row['username'] . '<br>';
    echo "password: " . $row['password'] . '<br>';
    echo "Email: " . $row['email'] . '<br>';
}


// echo "UserName: " . $_SESSION['username'];
// echo "<br>";
// // echo "Email: " . $_SESSION['mail'];
// // echo "<br>";
// echo "password: " . $_SESSION['password'];

?>