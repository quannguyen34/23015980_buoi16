<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập thành công</title>
</head>
<body>
    <h1>Chào mừng, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Bạn đã đăng nhập thành công vào hệ thống quản trị.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>