<?php
require "connect.php"; // kết nối tới cơ sở dữ liệu
$id = $_GET["id"]; // lấy id sinh viên từ tham số GET
$stmt = $conn->prepare("DELETE FROM students WHERE id=?"); // chuẩn bị truy vấn xóa sinh viên
$stmt->execute([$id]); // thực thi truy vấn xóa với id truyền vào
header("Location:index.php"); // quay lại trang danh sách sau khi xóa
?>