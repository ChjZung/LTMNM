<?php

require "../db.php";

$sql = "
/* Top 5 khách hàng chi tiêu nhiều nhất */
SELECT
    c.customer_id,
    c.name,
    SUM(od.quantity * od.price) AS total_spent
FROM customers c
    JOIN orders o
        ON c.customer_id = o.customer_id
    JOIN order_details od
        ON o.order_id = od.order_id
GROUP BY
    c.customer_id,
    c.name
ORDER BY total_spent DESC
LIMIT 5
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Bài 10</title>

</head>

<body>

    <h2>Top 5 khách hàng chi tiêu nhiều nhất</h2>

    <table border="1">

        <tr>

            <th>ID</th>

            <th>Tên</th>

            <th>Tổng tiền</th>

        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["customer_id"] ?></td>

                <td><?= $row["name"] ?></td>

                <td><?= number_format($row["total_spent"], 0, ",", ".") ?> VNĐ</td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>