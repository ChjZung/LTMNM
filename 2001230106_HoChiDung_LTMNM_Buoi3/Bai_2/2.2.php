<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Hiển thị nội dung</title>
</head>

<body>

    <!-- Ô nhập -->
    <input
        type="text"
        id="txt"
        placeholder="Nhập gì đó">

    <!-- Nút -->
    <button onclick="showText()">
        Hiển thị
    </button>

    <!-- Hiển thị kết quả -->
    <div id="output"></div>

    <script>

        function showText(){

            // Lấy dữ liệu từ input
            let text =
                document.getElementById("txt").value;

            // Hiển thị lên div
            document.getElementById("output").innerText =
                text;

        }

    </script>

</body>

</html>