<?php

$sql = "select * from members";
$result = (new Connect())->excuteQuery($sql);
?>

<h1>Danh sách thành viên</h1>
<a href="?action=create">Đăng ký thành viên mới</a>

<div class="container">
    <table class="table-home">
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
            <th>Sở thích</th>
            <th>Khung giờ</th>
            <th colspan='2'>Thao tác</th>
        </tr>
        <?php foreach ($result as $each) : ?>
            <tr>
                <td id="<?php echo $each['member_id']; ?>"><?php echo "#" . $each['member_id']; ?></td>
                <td><?php echo $each['member_name']; ?></td>
                <td><?php echo date('d/m/Y', strtotime($each["member_dob"])); ?></td>
                <td><?php echo $each['member_sex'] == 0 ? "Nam" : ($each['member_sex'] == 1 ? "Nữ" : "Không xác định"); ?></td>
                <td><?php echo $each['member_nativeLand']; ?></td>
                <td><?php $hobby = [];
                    if (str_contains($each['member_hobby'], "0"))
                        $hobby[] = "Thể thao";
                    if (str_contains($each['member_hobby'], "1"))
                        $hobby[] = "Âm nhạc";
                    if (str_contains($each['member_hobby'], "2"))
                        $hobby[] = "Xem phim";
                    echo join(", ", $hobby); ?></td>
                <td><?php echo $each['member_time'] == 0 ? "Sáng" : ($each['member_time'] == 1 ? "Chiều" : "Tối"); ?></td>
                <td><a href="?action=edit&id=<?php echo $each['member_id']; ?>">Sửa</a></td>
                <td><a onclick="return Del('<?php echo $each['member_name']; ?>')" href="?action=delete&id=<?php echo $each['member_id']; ?>">Xóa</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<script>
    function Del(name) {
        return confirm("Bạn có chắc chắn muốn xoá thành viên: " + name + " ?");
    }
</script>