<?php
require_once './vendor/connect.php';


$name=$_POST['name'];
$start_group=$_POST['start_group'];
$kol_group_people=$_POST['kol_group_people'];
$end_group=$_POST['end_group'];
$price_one_lesson=$_POST['price_one_lesson'];
$price_one_month=$_POST['price_one_month'];

mysqli_query($connect,"INSERT INTO `add_group` (`id`, `name`, `start_group`, `kol_group_people`, `end_group`, `price_one_lesson`, 
`price_one_month`) VALUES (NULL, '$name', '$start_group', '$kol_group_people', '$end_group', '$price_one_lesson', '$price_one_month');");

header("Location: ../profile.php");

?>