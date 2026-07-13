<?php
require "connect.php";

$sql = "SELECT * FROM students";

$stmt = $conn->query($sql);

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>Danh sách sinh viên</title>

</head>

<body>

<h2>Danh sách sinh viên</h2>

<a href="add_student.php">

Thêm sinh viên

</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">

<tr>

<th>ID</th>

<th>Họ tên</th>

<th>Email</th>

<th>SĐT</th>

<th>Thao tác</th>

</tr>

<?php foreach($students as $row){ ?>

<tr>

<td><?= $row["id"] ?></td>

<td><?= $row["name"] ?></td>

<td><?= $row["email"] ?></td>

<td><?= $row["phone"] ?></td>

<td>

<a href="edit_student.php?id=<?= $row["id"] ?>">

Sửa

</a>

|

<a
href="delete_student.php?id=<?= $row["id"] ?>"
onclick="return confirm('Xóa sinh viên?')">

Xóa

</a>

</td>

</tr>

<?php } ?>

</table>

</body>

</html>