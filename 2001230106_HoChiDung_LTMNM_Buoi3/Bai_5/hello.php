<?php

/*
 hello.php
 Mô tả: Nhận dữ liệu POST trường 'name' và trả về lời chào.
 Bảo mật: Sử dụng `htmlspecialchars` để tránh XSS khi in ra HTML.
 */

// Lấy giá trị 'name' từ POST, nếu không tồn tại thì dùng 'Bạn'
$name = $_POST['name'] ?? 'Bạn';

// In ra lời chào đã được escape để an toàn khi hiển thị trong HTML
echo "Xin chào, " . htmlspecialchars($name);

?>