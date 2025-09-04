<?php
session_start();
include "connect/db.php";



if (!isset($_SESSION['mail'])) {
    echo ("يجب تسجيل الدخول أولاً.");
    echo "
            <link rel='stylesheet' href='style/style.css'>
            <form action='index.php'>
                <button type='submit' class='btn' >Log in</button>
            </form>
        ";

    header("Location: index.php");
    exit;
}

$mail = $_SESSION['mail'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $_SESSION['password'];

    $sql = "UPDATE users SET username='$username', password='$password' WHERE email='$mail'";
    if (mysqli_query($con, $sql)) {
        echo "updated correctly.";
    } else {
        echo "خطأ: " . mysqli_error($con);
    }

    echo "$username";
}
?>

<!-- form  -->
<form method="post" action="">
    <label for="username">اسم المستخدم : </label>
    <input type="text" name="username" placeholder="user name" required value='<?php echo $username?>' ><br>
    كلمة المرور الجديدة (اتركها فارغة لو مش هتغيرها):
    <input type="password" name="password"><br>
    <button type="submit" onclick="alert('updated')">تعديل</button>
</form>