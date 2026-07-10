<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thời gian Server</title>
    <!--
        Bài: Hiển thị thời gian server
        Mô tả: Trang này sẽ hiển thị thời gian hiện tại do file PHP `time.php` trả về.
        Cách hoạt động:
        - Hàm `getTime()` gửi request tới `time.php` và nhận chuỗi thời gian.
        - Kết quả được gán vào `innerText` của thẻ <h1 id="time">.
        - `setInterval` gọi `getTime()` mỗi 5 giây để cập nhật.
    -->
</head>

<body>

    <!-- Hiển thị giờ (nội dung được cập nhật bởi JavaScript) -->
    <h1 id="time"></h1>

    <script>

        // Hàm lấy giờ từ `time.php` và cập nhật vào DOM
        function getTime(){

            // Gửi request tới time.php
            fetch("time.php")

            // Nhận dữ liệu dạng text
            .then(res => res.text())

            // Hiển thị lên màn hình
            .then(data => {
                // Gán chuỗi thời gian trả về vào thẻ có id "time"
                document.getElementById("time").innerText = data;
            })
            // Bắt lỗi mạng hoặc lỗi khác (không bắt trước đây)
            .catch(err => {
                document.getElementById("time").innerText = 'Không thể lấy thời gian';
                console.error('Lỗi khi gọi time.php:', err);
            });

        }

        // Cứ 5 giây gọi lại để cập nhật thời gian liên tục
        setInterval(getTime, 5000);

        // Chạy ngay lần đầu khi trang load
        getTime();

    </script>

</body>

</html>