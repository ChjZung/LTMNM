<?php
require "connect.php"; // kết nối tới cơ sở dữ liệu bằng file connect.php
if (isset($_POST["btnSave"])) { // kiểm tra xem form đã được gửi chưa
    $sql = "INSERT INTO students(name,email,phone) VALUES(?,?,?)"; // câu truy vấn chèn dữ liệu mới
    $stmt = $conn->prepare($sql); // chuẩn bị câu truy vấn SQL
    $stmt->execute([ // thực thi câu truy vấn với dữ liệu từ form
        $_POST["name"],
        $_POST["email"],
        $_POST["phone"]
    ]);
    header("Location:index.php"); // chuyển hướng về trang danh sách sau khi lưu
}
?>
<form method="POST"> <!-- form gửi dữ liệu bằng phương thức POST -->
    Tên <br>
    <input type="text" name="name"> <!-- trường nhập tên -->
    <br><br>
    Email <br>
    <input type="email" name="email"> <!-- trường nhập email -->
    <br><br>
    SĐT <br>
    <input type="text" name="phone"> <!-- trường nhập số điện thoại -->
    <br><br>
    <input type="submit" name="btnSave" value="Lưu"> <!-- nút lưu dữ liệu -->
</form>