<?php

require "../db.php";

$sql = "
/* Sản phẩm có giá cao nhất trong từng loại */
SELECT
    c.category_name,
    p.name,
    p.price
FROM products p
    JOIN categories c
        ON p.category_id = c.category_id
WHERE p.price = (
    /* Subquery: lấy giá lớn nhất trong cùng loại */
    SELECT MAX(p2.price)
    FROM products p2
    WHERE p2.category_id = p.category_id
)
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Bài 5</title>

</head>

<body>

    <h2>Sản phẩm giá cao nhất từng loại</h2>

    <table border="1">

        <tr>

            <th>Loại hàng</th>

            <th>Sản phẩm</th>

            <th>Giá</th>

        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["category_name"] ?></td>

                <td><?= $row["name"] ?></td>

                <td><?= number_format($row["price"], 0, ",", ".") ?> VNĐ</td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>