<?php
require_once './vendor/connect.php';



$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$genre=$_POST['genre'];
$city=$_POST['city'];
$post=$_POST['post'];

mysqli_query($connect,"INSERT INTO `add_teachr` (`id`, `name`, `surname`, `email`, `genre`, `city`, 
`post`) VALUES (NULL, '$name', '$surname', '$email', '$genre', '$city', '$post');");

header("Location: ../profile.php");

?>