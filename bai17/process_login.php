<?php
session_start();

$admin_user = "admin";
$admin_pass = "Admin@123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if (empty($user) || empty($pass)) {
        die("Vui lòng không để trống thông tin! <a href='login.html'>Quay lại</a>");
    }

    if ($user === $admin_user && $pass === $admin_pass) {
        $_SESSION['username'] = $user;
        header("Location: success.php");
        exit();
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu! <a href='login.html'>Thử lại</a>";
    }
}
?>