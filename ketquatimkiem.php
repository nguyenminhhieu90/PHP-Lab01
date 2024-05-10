<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="300">
        <caption>
            <h2>Kết quả tìm kiếm</h2>
        </caption>
        <tr>
            <td>Tên sản phẩm</td>
            <td><?php echo $_GET['product']; ?></td>
        </tr>
        <tr>
            <td>Loại sản phẩm</td>
            <td><?php echo $_GET['category']; ?></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><?php echo $_GET['price']; ?></td>
        </tr>
    </table>
</body>
</html>