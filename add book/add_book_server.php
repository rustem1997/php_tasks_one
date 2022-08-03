<?php
require_once './vendor/connect.php';

$name=$_POST['name'];
$series=$_POST['series'];
$author=$_POST['author'];
$date=$_POST['date'];
$weight=$_POST['weight'];
$page=$_POST['page'];

$date= DateTime::createFromFormat('d-m-Y', '10-06-2020')->format('Y-m-d');
mysqli_query($connect,"INSERT INTO `add_book` (`id`, `name`, `series`, `author`, `date`, `weight`, 
`page`)VALUES (NULL, '$name', '$series', '$author', '$date', '$weight', '$page');");

header("Location: ../profile.php");

?>