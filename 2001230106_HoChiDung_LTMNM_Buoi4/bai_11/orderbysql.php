<?php
require ('../bai_1/connect.php'); // kết nối tới database sử dụng file connect.php
$keyword = $_GET["keyword"] ?? ""; // lấy từ khóa tìm kiếm nếu có
$sort = $_GET["sort"] ?? "name"; // lấy cột sắp xếp, mặc định là name
$allow = ["name", "email"]; // danh sách cột cho phép sắp xếp
if (!in_array($sort, $allow)) {
    $sort = "name"; // nếu cột sai thì đặt về mặc định
}
$sql = "SELECT * FROM students WHERE name LIKE ? ORDER BY $sort"; // câu truy vấn tìm kiếm và sắp xếp
$stmt = $conn->prepare($sql); // chuẩn bị câu truy vấn
$stmt->execute(["%" . $keyword . "%"]); // thực thi truy vấn với tham số tìm kiếm
$students = $stmt->fetchAll(PDO::FETCH_ASSOC); // lấy kết quả dưới dạng mảng liên kết
?>

<form method="GET"> <!-- biểu mẫu tìm kiếm và sắp xếp -->
    <input type="text" name="keyword" placeholder="Nhập tên"> <!-- nhập từ khóa tìm kiếm -->
    <select name="sort"> <!-- chọn cách sắp xếp -->
        <option value="name">Tên</option> <!-- sắp xếp theo tên -->
        <option value="email">Email</option> <!-- sắp xếp theo email -->
    </select>
    <input type="submit" value="Tìm"> <!-- nút gửi biểu mẫu -->
</form>

<br>

<!DOCTYPE html> <!-- khai báo HTML5 -->
<html> <!-- bắt đầu tài liệu HTML -->
<head> <!-- phần đầu của trang -->
<meta charset="UTF-8"> <!-- mã hóa ký tự -->
<title>Danh sách sinh viên</title> <!-- tiêu đề trang -->
</head> <!-- kết thúc head -->
<body> <!-- bắt đầu nội dung -->

<h2>Danh sách sinh viên</h2> <!-- tiêu đề nội dung -->
<br><br> <!-- tạo khoảng cách -->

<table border="1" cellpadding="8" cellspacing="0"> <!-- bảng hiển thị kết quả -->
<tr>
<th>ID</th> <!-- cột ID -->
<th>Họ tên</th> <!-- cột họ tên -->
<th>Email</th> <!-- cột email -->
<th>SĐT</th> <!-- cột số điện thoại -->
<th>Ngày sinh</th> <!-- cột ngày sinh -->
<th>Thao tác</th> <!-- cột hành động -->
</tr>
<?php foreach($students as $row){ ?> <!-- lặp qua mỗi dòng sinh viên -->
<tr>
<td><?= $row["id"] ?></td> <!-- hiển thị ID -->
<td><?= $row["name"] ?></td> <!-- hiển thị tên -->
<td><?= $row["email"] ?></td> <!-- hiển thị email -->
<td><?= $row["phone"] ?></td> <!-- hiển thị số điện thoại -->
<td><?= $row["birthday"] ?></td> <!-- hiển thị ngày sinh -->
<td>
    <a href="edit.php?id=<?= $row["id"] ?>">Sửa</a> | <!-- liên kết sửa -->
    <a href="delete.php?id=<?= $row["id"] ?>" onclick="return confirm('Xóa sinh viên?')">Xóa</a> <!-- liên kết xóa với xác nhận -->
</td>
</tr>
<?php } ?> <!-- kết thúc vòng lặp -->
</table> <!-- kết thúc bảng -->

</body> <!-- kết thúc nội dung -->
</html> <!-- kết thúc tài liệu HTML -->
