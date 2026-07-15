<?php

require "../db.php";

$sql = "
/* Lấy tên loại và số lượng sản phẩm tương ứng
   Chỉ chọn những loại có nhiều hơn 5 sản phẩm */
SELECT
    c.category_name,
    COUNT(p.product_id) AS total_products
FROM categories c
    /* JOIN nội bộ vì chỉ quan tâm các loại có sản phẩm */
    JOIN products p
        ON c.category_id = p.category_id
GROUP BY c.category_name
HAVING COUNT(p.product_id) > 5
";

$stmt = $conn->prepare($sql);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Bài 3</title>

</head>

<body>

    <h2>Loại hàng có trên 5 sản phẩm</h2>

    <table border="1">

        <tr>

            <th>Loại hàng</th>

            <th>Số lượng</th>

        </tr>

        <?php foreach ($data as $row) { ?>

            <tr>

                <td><?= $row["category_name"] ?></td>

                <td><?= $row["total_products"] ?></td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>