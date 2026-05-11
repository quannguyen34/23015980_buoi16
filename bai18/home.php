<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Trang chủ</title></head>
<body>
    <h1>Chào mừng, <?php echo $_SESSION['full_name']; ?>!</h1>
    <p>Bạn đã đăng nhập hệ thống MySQL thành công.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>