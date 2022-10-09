<?php

$id = $_POST['member_id'];
$name = $_POST['member_name'];
$dob = $_POST['member_dob'];
$sex = $_POST['member_sex'] ?? 0;
$nativeLand = $_POST['member_nativeLand'];
$hobby = '';
foreach ($_POST['member_hobby'] as $item) {
    echo $item;
    $hobby .= $item;
}
$time = $_POST['member_time'];

$sql = "update `lecongminh`.`members` set `member_name` = '$name', `member_dob` = '$dob', `member_sex` = $sex, `member_hobby` = '$hobby',`member_nativeLand`= '$nativeLand', `member_time` = $time where `member_id` = $id";
// die($sql);
(new Connect())->excuteNonQuery($sql);
header('location: index.php');
