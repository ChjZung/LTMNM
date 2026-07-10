<?php

/*
 chat.php
 Mô tả: Nếu nhận POST 'msg' thì ghi dòng tin nhắn vào `chat.txt` (append).
 Khi được gọi bằng GET, trả về danh sách tin nhắn dạng JSON (mỗi phần tử là một dòng).
 Lưu ý: Đây là ví dụ đơn giản; trong môi trường production nên dùng DB
 và xử lý đồng bộ/khóa file để tránh ghi chồng.
 */

// Tên file lưu tin nhắn
$file = "chat.txt";

// Nếu JavaScript gửi tin nhắn lên
if (isset($_POST["msg"])) {
    // Ghi tin nhắn vào cuối file, mỗi tin nhắn một dòng
    file_put_contents($file, $_POST["msg"] . "\n", FILE_APPEND);
}

// Đọc toàn bộ tin nhắn (nếu file tồn tại)
$messages = file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];

// Trả dữ liệu dạng JSON
header("Content-Type: application/json");
echo json_encode($messages);

?>