<?php

/*
 search.php
 Mô tả: Nhận tham số GET `q` (từ khóa), tìm trong mảng sản phẩm mẫu,
 và trả về kết quả dạng JSON.
 Lưu ý: Đây là ví dụ minh họa; dữ liệu thật nên lấy từ cơ sở dữ liệu.
 */

// Lấy từ khóa, chuyển về chữ thường để so khớp không phân biệt hoa thường
$keyword = strtolower($_GET['q'] ?? '');

$products = [
	["name" => "Iphone 15", "price" => 30000000],
	["name" => "Samsung S24", "price" => 25000000]
];

// Lọc các sản phẩm có chứa từ khóa trong tên
$result = array_filter($products, fn($p) => strpos(strtolower($p['name']), $keyword) !== false);

// Trả về JSON
header('Content-Type: application/json');
echo json_encode(array_values($result));

?>