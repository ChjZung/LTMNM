<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách</title>
</head>

<body>

    <!-- Ô nhập -->
    <input
        type="text"
        id="item"
        placeholder="Nhập nội dung">

    <!-- Nút -->
    <button onclick="addItem()">
        Thêm
    </button>

    <!-- Danh sách -->
    <ul id="list"></ul>

    <script>

        function addItem(){

            // Lấy dữ liệu nhập
            let value =
                document.getElementById("item").value;

            // Kiểm tra có nhập hay chưa
            if(value.trim() != ""){

                // Tạo thẻ li
                let li =
                    document.createElement("li");

                // Gán nội dung
                li.innerText = value;

                // Thêm vào ul
                document.getElementById("list")
                        .appendChild(li);

            }

        }

    </script>

</body>

</html>