<?php

require "../db.php";

// SQL: Thống kê số lượng sản phẩm theo loại (category)
$sql = "
/* Chọn tên loại và đếm số sản phẩm tương ứng */
SELECT
    c.category_name,
    COUNT(p.product_id) AS total_products
FROM categories c
    /* Sử dụng LEFT JOIN để vẫn hiển thị loại không có sản phẩm */
    LEFT JOIN products p
        ON c.category_id = p.category_id
/* Gom nhóm theo tên loại để tính số lượng */
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

    <title>Bài 1</title>

</head>

<body>

    <h2>

        Thống kê số lượng sản phẩm

    </h2>

    <table border="1">

        <tr>

            <th>Loại</th>

            <th>Số lượng</th>

        </tr>

        <?php

        foreach ($data as $row) {

        ?>

            <tr>

                <td>

                    <?= $row["category_name"] ?>

                </td>

                <td>

                    <?= $row["total_products"] ?>

                </td>

            </tr>

        <?php

        }

        ?>

    </table>

</body>

</html>