<?php
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($pass, $row['PASSWORD'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['full_name'] = $row['full_name'];
            header("Location: home.php");
            exit();
        }
    }
    echo "Sai thông tin đăng nhập! <a href='login.php'>Thử lại</a>";
}
?>