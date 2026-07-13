<?php
$dsn = "mysql:host=localhost;dbname=labdb;charset=utf8"; // chuỗi DSN kết nối tới MySQL
$username = "root"; // tên người dùng cơ sở dữ liệu
$password = ""; // mật khẩu cơ sở dữ liệu
try {
    $conn = new PDO($dsn, $username, $password); // tạo đối tượng PDO để kết nối
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // bật chế độ lỗi ngoại lệ
    echo "Kết nối thành công!"; // thông báo nếu kết nối thành công
} catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage(); // thông báo lỗi khi kết nối thất bại
}
?>