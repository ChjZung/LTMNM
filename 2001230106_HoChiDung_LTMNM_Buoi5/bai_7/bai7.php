<?php

require "../db.php";

$sql = "
/* Tìm khách hàng mua nhiều sản phẩm nhất (theo tổng số lượng) */
SELECT
    c.customer_id,
    c.name,
    /* Tổng số lượng sản phẩm khách đã mua */
    SUM(od.quantity) AS total_items
FROM customers c
    JOIN orders o
        ON c.customer_id = o.customer_id
    JOIN order_details od
        ON o.order_id = od.order_id
GROUP BY
    c.customer_id,
    c.name
ORDER BY total_items DESC
LIMIT 1
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Bài 7</title>

</head>

<body>

    <h2>Khách hàng mua nhiều sản phẩm nhất</h2>

    <table border="1">

        <tr>

            <th>Mã KH</th>

            <th>Tên khách hàng</th>

            <th>Tổng số lượng</th>

        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["customer_id"] ?></td>

                <td><?= $row["name"] ?></td>

                <td><?= $row["total_items"] ?></td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>