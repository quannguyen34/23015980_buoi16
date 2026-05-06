<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính toán và Phân loại Tour</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .result { border: 1px solid #ccc; padding: 15px; border-radius: 5px; width: fit-content; }
        .error { color: red; font-weight: bold; }
        .price { color: #e67e22; font-weight: bold; }
        .category { color: #27ae60; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Chi tiết đặt Tour</h1>

    <?php
        // 1. Khai báo và gán giá trị
        $tenTour = "Tour Phú Quốc nghỉ dưỡng";
        $giaTour = 4500000;
        $soNguoi = 4;

        // 2. Xử lý logic
        if ($soNguoi <= 0) {
            echo "<p class='error'>Số người không hợp lệ</p>";
        } else {
            // Tính tổng tiền
            $tongTien = $giaTour * $soNguoi;

            // Phân loại tour dựa trên $giaTour
            if ($giaTour < 2000000) {
                $phanLoai = "Tour tiết kiệm";
            } elseif ($giaTour <= 4000000) {
                $phanLoai = "Tour tiêu chuẩn";
            } else {
                $phanLoai = "Tour cao cấp";
            }

            // 3. Hiển thị kết quả
            echo "<div class='result'>";
            echo "<p><strong>Tên tour:</strong> $tenTour</p>";
            echo "<p><strong>Giá gốc:</strong> " . number_format($giaTour, 0, ',', '.') . " VNĐ</p>";
            echo "<p><strong>Số lượng khách:</strong> $soNguoi</p>";
            echo "<hr>";
            echo "<p><strong>Tổng thanh toán:</strong> <span class='price'>" . number_format($tongTien, 0, ',', '.') . " VNĐ</span></p>";
            echo "<p><strong>Phân loại:</strong> <span class='category'>$phanLoai</span></p>";
            echo "</div>";
        }
    ?>
</body>
</html>