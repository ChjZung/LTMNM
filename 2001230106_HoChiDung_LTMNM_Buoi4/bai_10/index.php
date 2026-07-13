<?php
require "connect.php"; // kết nối tới database bằng file connect.php
$sql = "SELECT * FROM students"; // tạo câu truy vấn lấy tất cả sinh viên
$stmt = $conn->prepare($sql); // chuẩn bị câu truy vấn để thực thi
$stmt->execute(); // thực thi câu truy vấn
$students = $stmt->fetchAll(PDO::FETCH_ASSOC); // lấy tất cả kết quả dưới dạng mảng liên kết
?>

<!DOCTYPE html> <!-- khai báo tài liệu HTML5 -->
<html> <!-- bắt đầu trang HTML -->

<head> <!-- phần đầu trang -->
    <meta charset="UTF-8"> <!-- thiết lập mã ký tự UTF-8 -->
    <title>Danh sách sinh viên</title> <!-- tiêu đề trang -->
</head> <!-- kết thúc phần đầu -->

<body> <!-- bắt đầu phần nội dung -->

    <h2>Danh sách sinh viên</h2> <!-- tiêu đề nội dung -->
    <a href="add_student.php">Thêm sinh viên</a> <!-- liên kết tới trang thêm sinh viên -->
    <br><br> <!-- thêm khoảng cách -->

    <table border="1"> <!-- bảng hiển thị danh sách sinh viên -->
        <tr> <!-- hàng tiêu đề bảng -->
            <th>ID</th> <!-- cột ID -->
            <th>Họ tên</th> <!-- cột họ tên -->
            <th>Email</th> <!-- cột email -->
            <th>SĐT</th> <!-- cột số điện thoại -->
            <th>Thao tác</th> <!-- cột hành động -->
        </tr> <!-- kết thúc hàng tiêu đề -->
        <?php foreach ($students as $row) { ?> <!-- lặp qua từng sinh viên -->
            <tr> <!-- bắt đầu một hàng dữ liệu -->
                <td><?= $row["id"] ?></td> <!-- hiển thị ID sinh viên -->
                <td><?= $row["name"] ?></td> <!-- hiển thị tên sinh viên -->
                <td><?= $row["email"] ?></td> <!-- hiển thị email sinh viên -->
                <td><?= $row["phone"] ?></td> <!-- hiển thị số điện thoại sinh viên -->
                <td> <!-- bắt đầu cột hành động -->
                    <a href="edit_student.php?id=<?= $row["id"] ?>">Sửa</a> | <!-- liên kết sửa sinh viên -->
                    <a href="delete_student.php?id=<?= $row["id"] ?>" onclick="return confirm('Xóa?')">Xóa</a> <!-- liên kết xóa và xác nhận -->
                </td> <!-- kết thúc cột hành động -->
            </tr> <!-- kết thúc hàng dữ liệu -->
        <?php } ?> <!-- kết thúc vòng lặp -->
    </table> <!-- kết thúc bảng -->

</body> <!-- kết thúc phần nội dung -->

</html> <!-- kết thúc trang HTML -->