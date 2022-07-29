<?php
require_once './vendor/connect.php';
$id=$_POST['id'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$genre=$_POST['genre'];
$city=$_POST['city'];
$post=$_POST['post'];

mysqli_query($connect,"UPDATE `add_teachr` SET `name` = '$name', `surname` = '$surname', `email` = '$email', 
`genre` = '$genre', `city` = '$city', `post` = '$post'  WHERE `add_teachr`.`id` = '$id';");
header('Location: ./view_teachr.php');

?>