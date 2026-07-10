<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Kiểm tra tuổi</title>
</head>

<body>

    <!-- Ô nhập tuổi -->
    <input type="number"
           id="age"
           placeholder="Nhập tuổi">

    <!-- Khi bấm sẽ gọi hàm checkAge() -->
    <button onclick="checkAge()">
        Kiểm tra
    </button>

    <!-- Hiển thị kết quả -->
    <p id="result"></p>

    <script>

        // Hàm kiểm tra tuổi
        function checkAge(){

            // Lấy giá trị người dùng nhập
            let age =
                document.getElementById("age").value;

            // Kiểm tra đủ 18 tuổi hay chưa
            if(age >= 18){

                document.getElementById("result").innerText =
                    "Bạn đã đủ tuổi";

            }else{

                document.getElementById("result").innerText =
                    "Bạn chưa đủ tuổi";

            }

        }

    </script>

</body>

</html>