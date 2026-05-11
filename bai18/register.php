<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Đăng ký</title></head>
<body>
    <h2>ĐĂNG KÝ TÀI KHOẢN</h2>
    <form action="process_register.php" method="POST">
        Username (4-30 ký tự): <input type="text" name="username" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Họ tên: <input type="text" name="full_name" required><br><br>
        Mật khẩu (min 8 ký tự): <input type="password" name="password" required><br><br>
        <button type="submit">Đăng ký</button>
    </form>
    <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
</body>
</html>