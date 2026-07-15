<?php

// Cấu hình kết nối tới MySQL
$host = "localhost"; // host của database (thường là localhost trên môi trường phát triển)
$db = "lab5_shop"; // tên database
$user = "root"; // username kết nối
$pass = ""; // mật khẩu (để trống nếu không có mật khẩu)

try {

    // Tạo đối tượng PDO kết nối tới MySQL, đặt charset là utf8
    $conn = new PDO(

        "mysql:host=$host;dbname=$db;charset=utf8",

        $user,

        $pass

    );

    // Bật chế độ báo lỗi dưới dạng Exception để dễ bắt và xử lý lỗi
    $conn->setAttribute(

        PDO::ATTR_ERRMODE,

        PDO::ERRMODE_EXCEPTION

    );
} catch (PDOException $e) {

    // Nếu kết nối thất bại, dừng script và in thông báo lỗi (cho môi trường dev)
    die($e->getMessage());
}
