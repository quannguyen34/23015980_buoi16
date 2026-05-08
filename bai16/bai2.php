<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra dữ liệu Form</title>
    <style>
        .error { color: red; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h2>KIỂM TRA ĐẶT TOUR</h2>
    <form method="POST">
        Họ tên: <input type="text" name="hoTen"><br><br>
        Số điện thoại: <input type="text" name="sdt"><br><br>
        Email: <input type="email" name="email"><br><br>
        Điểm đến: 
        <select name="diemDen">
            <option value="">--Chọn điểm đến--</option>
            <option value="Đà Lạt">Đà Lạt</option>
            <option value="Phú Quốc">Phú Quốc</option>
        </select><br><br>
        Số người: <input type="number" name="soNguoi"><br><br>
        <button type="submit" name="submit">Đặt tour</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $hoTen = $_POST['hoTen'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $diemDen = $_POST['diemDen'];
        $soNguoi = $_POST['soNguoi'];
        
        $errors = [];

        if (empty($hoTen)) $errors[] = "Họ tên không được rỗng";
        if (empty($sdt)) $errors[] = "Số điện thoại không được rỗng";
        if (empty($email)) $errors[] = "Email không được rỗng";
        if (empty($diemDen)) $errors[] = "Phải chọn điểm đến";
        if (!is_numeric($soNguoi) || $soNguoi <= 0) $errors[] = "Số người phải là số và lớn hơn 0";

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
        } else {
            echo "<p class='success'>Đặt tour thành công</p>";
        }
    }
    ?>
</body>
</html>