<?php

require "../db.php";

$sql = "
/* Thống kê tổng số lượng và doanh thu theo loại hàng */
SELECT
    c.category_name,
    /* Tổng số lượng sản phẩm đã bán theo loại */
    SUM(od.quantity) AS total_quantity,
    /* Tổng doanh thu theo loại = tổng(quantity * price) */
    SUM(od.quantity * od.price) AS total_revenue
FROM categories c
    JOIN products p
        ON c.category_id = p.category_id
    JOIN order_details od
        ON p.product_id = od.product_id
GROUP BY c.category_name
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bài 8</title>
</head>

<body>

    <h2>Thống kê doanh thu từng loại</h2>

    <table border="1">

        <tr>

            <th>Loại hàng</th>

            <th>Tổng số lượng</th>

            <th>Doanh thu</th>

        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["category_name"] ?></td>

                <td><?= $row["total_quantity"] ?></td>

                <td><?= number_format($row["total_revenue"], 0, ",", ".") ?> VNĐ</td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>