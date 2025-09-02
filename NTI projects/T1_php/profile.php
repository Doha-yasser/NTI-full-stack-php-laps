
<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['mail'] = $_POST['mail'];
        $_SESSION['password'] = $_POST['password'];
    }

    echo "UserName: ". $_SESSION['username'];
    echo "<br>";
    echo "Email: ".$_SESSION['mail'];
    echo "<br>";
    echo "password: " . $_SESSION['password'];

?>
