<?php

require "connect.php";

if(isset($_POST["btnSave"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $sql = "INSERT INTO students(name,email,phone)
            VALUES(?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([$name,$email,$phone]);

    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Thêm sinh viên</title>
</head>

<body>

<h2>Thêm sinh viên</h2>

<form method="POST">

Họ tên <br>
<input type="text" name="name">

<br><br>

Email <br>
<input type="email" name="email">

<br><br>

SĐT <br>
<input type="text" name="phone">

<br><br>

<input
type="submit"
name="btnSave"
value="Lưu">

</form>

<br>

<a href="index.php">

Quay lại

</a>

</body>

</html>