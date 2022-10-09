<?php
$id = $_GET['id'];
$sql = "delete from `lecongminh`.`members` where member_id = " . $id;
(new Connect())->excuteNonQuery($sql);
header('location: index.php');
