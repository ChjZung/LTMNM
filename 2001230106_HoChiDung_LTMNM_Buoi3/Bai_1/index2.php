<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Biến JavaScript</title>
</head>

<body>

    <!-- Hiển thị thông tin -->
    <div id="info"></div>

    <script>

        // Khai báo biến tên
        let name = "An";

        // Khai báo biến tuổi
        let age = 20;

        // In dữ liệu ra Console
        console.log(name, age);

        // Hiển thị dữ liệu lên trang HTML
        document.getElementById("info").innerHTML =
            `Tên: ${name}, Tuổi: ${age}`;

    </script>

</body>

</html>