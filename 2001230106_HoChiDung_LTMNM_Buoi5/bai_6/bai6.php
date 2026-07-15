<?php

require "../db.php";

$sql = "
/* Danh sách sản phẩm chưa từng xuất hiện trong bảng order_details (chưa được đặt hàng) */
SELECT
    p.product_id,
    p.name
FROM products p
    /* LEFT JOIN để lấy cả các sản phẩm không có dòng tương ứng trong order_details */
    LEFT JOIN order_details od
        ON p.product_id = od.product_id
WHERE od.product_id IS NULL
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Bài 6</title>

</head>

<body>

    <h2>Sản phẩm chưa từng được đặt hàng</h2>

    <table border="1">

        <tr>

            <th>Mã sản phẩm</th>

            <th>Tên sản phẩm</th>

        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["product_id"] ?></td>

                <td><?= $row["name"] ?></td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>