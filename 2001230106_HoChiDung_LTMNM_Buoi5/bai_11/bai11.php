<?php

require "../db.php";

$sql = "
/* Loại hàng có doanh thu lớn nhất */
SELECT
    c.category_name,
    /* Doanh thu theo loại = tổng(quantity * price) */
    SUM(od.quantity * od.price) AS revenue
FROM categories c
    JOIN products p
        ON c.category_id = p.category_id
    JOIN order_details od
        ON p.product_id = od.product_id
GROUP BY c.category_name
ORDER BY revenue DESC
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

    <title>Bài 11</title>

</head>

<body>

    <h2>Loại hàng doanh thu cao nhất</h2>

    <table border="1">

        <tr>

            <th>Loại hàng</th>

            <th>Doanh thu</th>

        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["category_name"] ?></td>

                <td><?= number_format($row["revenue"], 0, ",", ".") ?> VNĐ</td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>