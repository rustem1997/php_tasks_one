<?php
require_once './vendor/connect.php';

$id=$_POST['id'];
$name=$_POST['name'];
$start_group=$_POST['start_group'];
$kol_group_people=$_POST['kol_group_people'];
$end_group=$_POST['end_group'];
$price_one_lesson=$_POST['price_one_lesson'];
$price_one_month=$_POST['price_one_month'];

mysqli_query($connect," UPDATE `add_group` SET `name` = '$name', `start_group` = '$start_group', 
`kol_group_people` = '$kol_group_people',`end_group` = '$end_group', `price_one_lesson` = '$price_one_lesson', 
`price_one_month` = '$price_one_month' WHERE `add_group`.`id` = '$id';");

header('Location: ./view_group.php');
?>