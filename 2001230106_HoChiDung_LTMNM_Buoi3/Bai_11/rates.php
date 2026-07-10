<?php
// ========== BACKEND: TỶ GIÁ NGOẠI TỆ ==========

// Set header = báo cho browser đây là JSON
header("Content-Type: application/json; charset=utf-8");

// Đọc file rates.json và gửi về cho JavaScript
// file_get_contents() = đọc file
echo file_get_contents("rates.json");

// Ghi chú: Có thể dùng API thật như:
// $ch = curl_init('https://api.example.com/rates');
// curl_exec($ch);
// Nhưng ở đây dùng file JSON để đơn giản
?>