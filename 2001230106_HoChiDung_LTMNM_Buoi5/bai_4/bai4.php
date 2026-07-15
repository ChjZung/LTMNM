<?php

require "../db.php";

$sql = "
/* Danh sách khách hàng và tổng chi tiêu của họ
   Chỉ hiển thị khách hàng có tổng chi tiêu lớn hơn 1.000.000 */
SELECT
    c.customer_id,
    c.name,
    /* Tổng chi tiêu cho mỗi khách = tổng(quantity * price) */
    SUM(od.quantity * od.price) AS total_spent
FROM customers c
    /* Nối orders và order_details để lấy các sản phẩm đã mua */
    JOIN orders o
        ON c.customer_id = o.customer_id
    JOIN order_details od
        ON o.order_id = od.order_id
GROUP BY c.customer_id, c.name
HAVING total_spent > 1000000
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Bài 4</title>

</head>

<body>

    <h2>Khách hàng có tổng chi tiêu trên 1.000.000</h2>

    <table border="1">

        <tr>

            <th>ID</th>

            <th>Khách hàng</th>

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