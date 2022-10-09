<?php

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

$sql = "insert into `lecongminh`.`members` (`member_name`,`member_dob`,`member_sex`,`member_nativeLand`,`member_hobby`,`member_time`) values ('$name','$dob',$sex,'$nativeLand','$hobby',$time)";
(new Connect())->excuteNonQuery($sql);
header('location: index.php');
