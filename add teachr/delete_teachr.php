<?php
require_once './vendor/connect.php';

$id=$_GET['id'];

mysqli_query($connect," DELETE FROM`add_teachr`  WHERE `add_teachr`.`id` = '$id';");


header('Location: ./view_teachr.php'); 