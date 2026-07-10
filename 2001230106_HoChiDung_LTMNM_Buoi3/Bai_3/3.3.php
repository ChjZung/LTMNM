<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đồng hồ</title>
</head>

<body>

    <!-- Hiển thị giờ -->
    <h1 id="clock"></h1>

    <script>

        // Hàm cập nhật giờ
        function updateClock(){

            // Lấy thời gian hiện tại
            let now = new Date();

            // Hiển thị lên màn hình
            document.getElementById("clock").innerText =
                now.toLocaleTimeString();

        }

        // Cập nhật mỗi 1 giây
        setInterval(updateClock,1000);

        // Hiển thị ngay khi mở trang
        updateClock();

    </script>

</body>

</html>