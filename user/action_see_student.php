<?php
require_once './vendor/connect.php';
$gi_name=$_POST['gi_name'];
$gi_surname=$_POST['gi_surname'];
$gi_email=$_POST['gi_email'];

$gi_city=$_POST['gi_city'];
$tel_number=$_POST['tel_number'];

mysqli_query($connect,"INSERT INTO `see_student` (`id`, `gi_name`, `gi_surname`, `gi_email`, `gi_city`, 
`tel_number`) VALUES (NULL, '$gi_name', '$gi_surname', '$gi_email', '$gi_city', '$tel_number');");

header("Location: ../user/view_user/view_group.php");

?>