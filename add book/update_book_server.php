<?php
require_once './vendor/connect.php';
$id=$_POST['id'];
$name=$_POST['name'];
$series=$_POST['series'];
$author=$_POST['author'];
$date=$_POST['date'];
$weight=$_POST['weight'];
$page=$_POST['page'];

mysqli_query($connect,"UPDATE `add_book` SET `name` = '$name', `series` = '$series', `author` = '$author', 
`date` = '$date', `weight` = '$weight', `page` = '$page'  WHERE `add_book`.`id` = '$id';");
header('Location: ./view_book.php');


?>