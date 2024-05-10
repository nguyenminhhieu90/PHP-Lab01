<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    <form action="laydulieu.php" method="post">
        <table width="450">
            <caption>
                <h3>Đăng ký thành viên</h3>
            </caption>
            <tr>
                <td>Tên đăng nhập</td>
                <td>
                    <input type="text" name="userName" id="userName" placeholder="Tên đăng nhập">
                </td>

            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td>
                    <input type="password" name="matKhau" id="matKhau" placeholder="Mật khẩu">
                </td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td>
                    <input type="text" name="fullName" id="fullName" placeholder="Họ tên">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" id="email" placeholder="Thư điện tử">
                </td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="gender" id="male" value="Nam">
                    <label for="male">Nam</label>
                    <input type="radio" name="gender" id="female" value="Nữ">
                    <label for="female">Nữ</label>
                </td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>
                    <input type="checkbox" name="hobby[]" id="dabong" value="Đá Bóng">
                    <label for="dabong">Đá bóng</label>
                    <input type="checkbox" name="hobby[]" id="caulong" value="Cầu Lông">
                    <label for="caulong">Cầu lông</label>
                    <input type="checkbox" name="hobby[]" id="dulich" value="Du Lịch">
                    <label for="dulich">Du lịch</label> <br>
                    <input type="checkbox" name="hobby[]" id="nghenhac" value="Nghe Nhạc">
                    <label for="nghenhac">Nghe nhạc</label>
                    <input type="checkbox" name="hobby[]" id="bongban" value="Bóng Bàn">
                    <label for="bongban">Bóng bàn</label>

                </td>
            </tr>
            <tr>
                <td>Tỉnh thành</td>
                <td>
                    <select name="province" id="province">
                        <option value="">--Chọn Tỉnh--</option>
                        <option value="hanoi">Hà Nội</option>
                        <option value="haiduong">Hải Dương</option>
                        <option value="haiphong">Hải Phòng</option>
                        <option value="hungyen">Hưng Yên</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td valign="top">Mô tả</td>
                <td>
                    <textarea name="description" id="description" cols="20" rows="5" placeholder="Mô tả thông tin"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Đồng ý" name="submit" id="submit">
                    <input type="reset" value="Làm lại" name="reset" id="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>