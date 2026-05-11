<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['username']);
    $email = trim($_POST['email']);
    $full_name = trim($_POST['full_name']);
    $pass = $_POST['password'];

    if (strlen($user) < 4 || strlen($user) > 30) die("Username không hợp lệ.");
    if (strlen($pass) < 8) die("Mật khẩu phải từ 8 ký tự.");
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) die("Email sai định dạng.");

    // Kiểm tra trùng lặp bằng Prepared Statement
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $user, $email);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) die("Username hoặc Email đã tồn tại.");

    // Mã hóa mật khẩu và lưu
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, full_name) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $user, $email, $hashed_pass, $full_name);

    if ($stmt->execute()) {
        echo "Đăng ký thành công! <a href='login.php'>Đăng nhập ngay</a>";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>