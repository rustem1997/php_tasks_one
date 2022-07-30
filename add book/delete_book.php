<?php
require_once './vendor/connect.php';

$id=$_GET['id'];

mysqli_query($connect," DELETE FROM`add_book`  WHERE `add_book`.`id` = '$id';");

header('Location: ./view_book.php'); 
