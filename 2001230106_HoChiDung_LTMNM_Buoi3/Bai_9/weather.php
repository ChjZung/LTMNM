<?php

/*
 weather.php
 Mô tả: Trả về dữ liệu thời tiết giả theo tham số GET `city`.
 Ví dụ minh họa; dữ liệu thật nên lấy từ API thời tiết.
 */

// Lấy tên thành phố, chuyển về chữ thường để so khớp
$city = strtolower($_GET["city"] ?? "");

// Dữ liệu giả cho vài thành phố
$data = [
    "hanoi" => [
        "temp" => 30,
        "desc" => "Nắng đẹp"
    ],
    "danang" => [
        "temp" => 32,
        "desc" => "Có mây"
    ]
];

// Trả JSON (nếu không có dữ liệu cho thành phố, trả object mặc định)
header("Content-Type: application/json");
echo json_encode($data[$city] ?? ["temp" => 0, "desc" => "Không có dữ liệu"]);

?>