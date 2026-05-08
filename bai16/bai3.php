<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách và Đặt tour</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        table, th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background: #eee; }
        .result { background: #f0f8ff; padding: 15px; border: 1px solid #007bff; }
        .error { color: red; }
    </style>
</head>
<body>

    <?php
    $dsTour = [
        ["ma" => "T01", "ten" => "Hạ Long Kỳ Vĩ", "diemDen" => "Quảng Ninh", "gia" => 2500000, "ngay" => 2],
        ["ma" => "T02", "ten" => "Phú Quốc Nắng Vàng", "diemDen" => "Kiên Giang", "gia" => 4500000, "ngay" => 3],
        ["ma" => "T03", "ten" => "Đà Lạt Sương Mù", "diemDen" => "Lâm Đồng", "gia" => 3200000, "ngay" => 3],
        ["ma" => "T04", "ten" => "Cố Đô Huế", "diemDen" => "Thừa Thiên Huế", "gia" => 2800000, "ngay" => 2]
    ];
    ?>

    <h2>DANH SÁCH TOUR</h2>
    <table>
        <tr>
            <th>Mã</th>
            <th>Tên Tour</th>
            <th>Điểm Đến</th>
            <th>Giá</th>
            <th>Số Ngày</th>
        </tr>
        <?php foreach ($dsTour as $t): ?>
        <tr>
            <td><?php echo $t['ma']; ?></td>
            <td><?php echo $t['ten']; ?></td>
            <td><?php echo $t['diemDen']; ?></td>
            <td><?php echo number_format($t['gia']); ?> VNĐ</td>
            <td><?php echo $t['ngay']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>ĐẶT TOUR</h2>
    <form method="POST">
        Họ tên: <input type="text" name="hoTen"><br><br>
        Chọn mã tour: 
        <select name="maTour">
            <option value="">--Chọn mã--</option>
            <?php foreach ($dsTour as $t): ?>
                <option value="<?php echo $t['ma']; ?>"><?php echo $t['ma'] . " - " . $t['ten']; ?></option>
            <?php endforeach; ?>
        </select><br><br>
        Số người: <input type="number" name="soNguoi"><br><br>
        <button type="submit" name="submit">Xác nhận đặt tour</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $hoTen = $_POST['hoTen'];
        $maTourChon = $_POST['maTour'];
        $soNguoi = $_POST['soNguoi'];

        if (empty($hoTen) || empty($maTourChon) || $soNguoi <= 0) {
            echo "<p class='error'>Vui lòng nhập đầy đủ và chính xác thông tin!</p>";
        } else {
            $tourTimThay = null;
            foreach ($dsTour as $t) {
                if ($t['ma'] == $maTourChon) {
                    $tourTimThay = $t;
                    break;
                }
            }

            if ($tourTimThay) {
                $tongTien = $tourTimThay['gia'] * $soNguoi;
                echo "<div class='result'>";
                echo "<h3>XÁC NHẬN HÓA ĐƠN</h3>";
                echo "Khách hàng: $hoTen <br>";
                echo "Tour: " . $tourTimThay['ten'] . "<br>";
                echo "Số lượng: $soNguoi người <br>";
                echo "Tổng tiền: <b>" . number_format($tongTien) . " VNĐ</b>";
                echo "</div>";
            }
        }
    }
    ?>

</body>
</html>