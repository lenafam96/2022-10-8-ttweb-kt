<?php
$id = $_GET['id'];
$sql = "select * from `lecongminh`.`members` where member_id = " . $id;
$result = (new Connect())->excuteQuery($sql);
$member = mysqli_fetch_array($result);
?>
<div class="container">

    <h1>Cập nhật thông tin thành viên</h1>
    <form action="?action=update" method="post">
        <input type="text" name="member_id" required value="<?php echo $member['member_id']; ?>" hidden>
        <table class="noborder">
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="member_name" required value="<?php echo $member["member_name"]; ?>"></td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td><input type="date" max="<?php echo date("Y-m-d"); ?>" name="member_dob" required value="<?php echo date('Y-m-d', strtotime($member["member_dob"])); ?>"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="member_sex" id="member_sex" value="0" <?php if ($member["member_sex"] == 0) echo "checked"; ?>>Nam &nbsp;
                    <input type="radio" name="member_sex" id="member_sex" value="1" <?php if ($member["member_sex"] == 1) echo "checked"; ?>>Nữ &nbsp;
                    <input type="radio" name="member_sex" id="member_sex" value="2" <?php if ($member["member_sex"] == 2) echo "checked"; ?>>Không xác định &nbsp;
                </td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><textarea rows="6" cols="40" type="text" name="member_nativeLand" required><?php echo $member["member_nativeLand"]; ?></textarea></td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>
                    <input type="checkbox" name="member_hobby[]" id="member_hobby" value="0" <?php if (str_contains($member["member_hobby"], "0")) echo "checked"; ?>>Thể thao <br>
                    <input type="checkbox" name="member_hobby[]" id="member_hobby" value="1" <?php if (str_contains($member["member_hobby"], "1")) echo "checked"; ?>>Âm nhạc <br>
                    <input type="checkbox" name="member_hobby[]" id="member_hobby" value="2" <?php if (str_contains($member["member_hobby"], "2")) echo "checked"; ?>>Xem phim <br>
                </td>
            </tr>
            <tr>
                <td>Khung giờ</td>
                <td>
                    <select name="member_time" id="member_time" require>
                        <option value="0" <?php if ($member["member_time"] == 0) echo "selected"; ?>>Sáng</option>
                        <option value="1" <?php if ($member["member_time"] == 1) echo "selected"; ?>>Chiều</option>
                        <option value="2" <?php if ($member["member_time"] == 2) echo "selected"; ?>>Tối</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="btn"><button type="submit">Cập nhật</button></td>
            </tr>
        </table>
    </form>
</div>

<a href="index.php">Trang chủ</a>