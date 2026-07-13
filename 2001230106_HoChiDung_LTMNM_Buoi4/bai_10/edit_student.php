<?php
require "connect.php"; // kết nối tới cơ sở dữ liệu
$id = $_GET["id"]; // lấy id sinh viên cần sửa từ tham số GET
$stmt = $conn->prepare("SELECT * FROM students WHERE id=?"); // chuẩn bị truy vấn lấy thông tin sinh viên
$stmt->execute([$id]); // thực thi truy vấn với id
$student = $stmt->fetch(PDO::FETCH_ASSOC); // lấy thông tin sinh viên dưới dạng mảng liên kết
if (isset($_POST["btnUpdate"])) { // kiểm tra nếu form cập nhật đã gửi
    $sql = "UPDATE students SET name=?, email=?, phone=? WHERE id=?"; // câu truy vấn cập nhật
    $stmt = $conn->prepare($sql); // chuẩn bị câu truy vấn cập nhật
    $stmt->execute([ // thực thi cập nhật với dữ liệu mới và id
        $_POST["name"],
        $_POST["email"],
        $_POST["phone"],
        $id
    ]);
    header("Location:index.php"); // chuyển hướng về trang danh sách sau khi cập nhật
}
?>
<form method="POST"> <!-- form gửi dữ liệu cập nhật -->
    Tên <br>
    <input type="text" name="name" value="<?= $student["name"] ?>"> <!-- trường nhập tên, hiển thị giá trị hiện tại -->
    <br><br>
    Email <br>
    <input type="email" name="email" value="<?= $student["email"] ?>"> <!-- trường nhập email, hiển thị giá trị hiện tại -->
    <br><br>
    SĐT <br>
    <input type="text" name="phone" value="<?= $student["phone"] ?>"> <!-- trường nhập số điện thoại, hiển thị giá trị hiện tại -->
    <br><br>
    <input type="submit" name="btnUpdate" value="Cập nhật"> <!-- nút gửi form cập nhật -->
</form>