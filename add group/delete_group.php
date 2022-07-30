<?php
require_once './vendor/connect.php';

$id=$_GET['id'];

mysqli_query($connect," DELETE FROM`add_group`  WHERE `add_group`.`id` = '$id';");


header('Location: ./view_group.php'); 