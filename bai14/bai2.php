<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin tour</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        h1 { color: #2c3e50; }
        .tour-info { border-left: 5px solid #3498db; padding-left: 15px; background: #f9f9f9; padding-top: 10px; padding-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Thông tin tour du lịch</h1>

    <?php
        // 1. Khai báo các biến
        $tenTour = "Tour Đà Lạt 3 ngày 2 đêm";
        $diemDen = "Đà Lạt";
        $soNgay = 3;
        $soDem = 2;
        $giaTour = 3200000;
    ?>

    <div class="tour-info">
        <!-- 2. Hiển thị thông tin sử dụng biến -->
        <h2><?php echo $tenTour; ?></h2>
        <p><strong>Điểm đến:</strong> <?php echo $diemDen; ?></p>
        <p><strong>Thời lượng:</strong> <?php echo $soNgay . " ngày " . $soDem . " đêm"; ?></p>
        
        <!-- Sử dụng number_format để hiển thị tiền tệ chuyên nghiệp -->
        <p><strong>Giá tour:</strong> 
           <span style="color: red; font-weight: bold;">
               <?php echo number_format($giaTour, 0, ',', '.'); ?> VNĐ
           </span>
        </p>
    </div>

</body>
</html>