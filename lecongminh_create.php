<div class="container">
    <h1>Đăng ký thành viên</h1>
    <form action="?action=store" method="post">
        <table class="noborder">
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="member_name" required></td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td><input type="date" max="<?php echo date("Y-m-d"); ?>" name="member_dob" required></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="member_sex" id="member_sex" value="0">Nam &nbsp;
                    <input type="radio" name="member_sex" id="member_sex" value="1">Nữ &nbsp;
                    <input type="radio" name="member_sex" id="member_sex" value="2">Không xác định &nbsp;
                </td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><textarea rows="6" cols="40" type="text" name="member_nativeLand" required></textarea></td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>
                    <input type="checkbox" name="member_hobby[]" id="member_hobby" value="0">Thể thao <br>
                    <input type="checkbox" name="member_hobby[]" id="member_hobby" value="1">Âm nhạc <br>
                    <input type="checkbox" name="member_hobby[]" id="member_hobby" value="2">Xem phim <br>
                </td>
            </tr>
            <tr>
                <td>Khung giờ</td>
                <td>
                    <select name="member_time" id="member_time" require>
                        <option value="0">Sáng</option>
                        <option value="1">Chiều</option>
                        <option value="2">Tối</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="btn"><button type="submit">Đăng ký</button></td>
            </tr>
        </table>
    </form>
</div>


<a href="index.php">Trang chủ</a>