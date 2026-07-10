<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đổi màu nền</title>
</head>

<body>

    <!-- Nút bấm -->
    <button onclick="changeBg()">
        Đổi màu nền
    </button>

    <script>

        // Hàm đổi màu nền
        function changeBg(){

            // Sinh một màu ngẫu nhiên
            let color =
                "#" + Math.floor(Math.random()*16777215).toString(16);

            // Đổi màu nền của trang
            document.body.style.backgroundColor = color;

        }

    </script>

</body>

</html>