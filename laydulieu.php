<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="450">
        <caption>
            <h2>Thông tin đăng ký</h2>
        </caption>
        <tr>
            <td>Tên đăng nhập</td>
            <td><?php echo $_POST['userName']; ?></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><?php echo $_POST['matKhau']; ?></td>
        </tr>
        <tr>
            <td>Họ và Tên</td>
            <td><?php echo $_POST['fullName']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_POST['email']; ?></td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td><?php echo $_POST['gender']; ?></td>
        </tr>
        <tr>
            <td>Sở thích</td>
            <td>
                <?php
                    $hobby = $_POST['hobby'];
                    $i = 0;
                    foreach ($hobby as $key => $value) {
                        $i++;
                        if($i == 1){
                            echo $value;
                        }else{
                            echo ",".$value;
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Tỉnh thành</td>
            <td><?php echo $_POST['province']; ?></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><?php echo $_POST['description']; ?></td>
        </tr>
    </table>
</body>
</html>
