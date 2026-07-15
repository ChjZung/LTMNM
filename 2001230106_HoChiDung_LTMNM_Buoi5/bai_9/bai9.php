<?php

require "../db.php";

$sql = "
/* Top 3 sản phẩm bán chạy nhất theo tổng số lượng bán */
SELECT
    p.product_id,
    p.name,
    SUM(od.quantity) AS total_sold
FROM products p
    JOIN order_details od
        ON p.product_id = od.product_id
GROUP BY
    p.product_id,
    p.name
ORDER BY total_sold DESC
LIMIT 3
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Bài 9</title>

</head>

<body>

    <h2>Top 3 sản phẩm bán chạy</h2>

    <table border="1">

        <tr>

            <th>ID</th>

            <th>Tên sản phẩm</th>

            <th>Đã bán</th>

        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["product_id"] ?></td>

                <td><?= $row["name"] ?></td>

                <td><?= $row["total_sold"] ?></td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>