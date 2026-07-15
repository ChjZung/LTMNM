<?php

require "../db.php";

$sql = "
-- SQL: Tính tổng doanh thu theo ngày
SELECT
    o.order_date,
    /* Tổng doanh thu trong ngày = tổng (số lượng * giá) của các dòng chi tiết đơn hàng */
    SUM(od.quantity * od.price) AS total_revenue
FROM orders o
    /* Nối với bảng chi tiết đơn hàng để lấy quantity và price */
    JOIN order_details od
        ON o.order_id = od.order_id
/* Gom nhóm theo ngày đặt hàng để tính tổng theo từng ngày */
GROUP BY o.order_date
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bài 2</title>
</head>

<body>

    <h2>Tổng doanh thu từng ngày</h2>

    <table border="1" cellpadding="10">

        <tr>
            <th>Ngày</th>
            <th>Tổng doanh thu</th>
        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["order_date"] ?></td>

                <td><?= number_format($row["total_revenue"], 0, ",", ".") ?> VNĐ</td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>