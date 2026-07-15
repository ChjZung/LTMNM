<?php

require "../db.php";

$sql = "
/* Liệt kê tất cả sản phẩm cùng với số lần xuất hiện trong order_details
   (số lần được đặt hàng). Dùng LEFT JOIN để vẫn hiển thị sản phẩm chưa có đơn hàng) */
SELECT
    p.product_id,
    p.name,
    COUNT(od.order_id) AS total_orders
FROM products p
    LEFT JOIN order_details od
        ON p.product_id = od.product_id
GROUP BY
    p.product_id,
    p.name
ORDER BY p.product_id
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Bài 12</title>

</head>

<body>

    <h2>Tất cả sản phẩm và số lần được đặt hàng</h2>

    <table border="1">

        <tr>

            <th>ID</th>

            <th>Sản phẩm</th>

            <th>Số lần đặt</th>

        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["product_id"] ?></td>

                <td><?= $row["name"] ?></td>

                <td><?= $row["total_orders"] ?></td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>