<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form đặt tour</title>
</head>
<body>
    <h2>ĐĂNG KÝ ĐẶT TOUR</h2>
    <form method="POST">
        Họ tên: <input type="text" name="hoTen" required><br><br>
        Điểm đến: 
        <select name="diemDen">
            <option value="Đà Lạt">Đà Lạt</option>
            <option value="Phú Quốc">Phú Quốc</option>
        </select><br><br>
        Số người: <input type="number" name="soNguoi" min="1" required><br><br>
        <button type="submit" name="submit">Đặt tour</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $hoTen = $_POST['hoTen'];
        $diemDen = $_POST['diemDen'];
        $soNguoi = $_POST['soNguoi'];

        echo "<hr>";
        echo "Khách hàng: $hoTen <br>";
        echo "Điểm đến: $diemDen <br>";
        echo "Số người: $soNguoi";
    }
    ?>
</body>
</html>