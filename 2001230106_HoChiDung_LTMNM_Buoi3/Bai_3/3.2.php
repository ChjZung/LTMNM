<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Kiểm tra Email</title>
</head>

<body>

    <!-- Form -->
    <form onsubmit="return validateEmail()">

        <input
            type="text"
            id="email"
            placeholder="Nhập email">

        <button type="submit">

            Kiểm tra

        </button>

    </form>

    <!-- Hiển thị kết quả -->
    <p id="msg"></p>

    <script>

        // Hàm kiểm tra email
        function validateEmail(){

            // Lấy email người dùng nhập
            let email =
                document.getElementById("email").value;

            // Biểu thức chính quy kiểm tra email
            let regex =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Kiểm tra
            if(regex.test(email)){

                document.getElementById("msg").innerText =
                    "Email hợp lệ";

            }else{

                document.getElementById("msg").innerText =
                    "Email không hợp lệ";

            }

            // Không cho form tải lại trang
            return false;

        }

    </script>

</body>

</html>