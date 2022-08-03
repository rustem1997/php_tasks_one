<?php
require_once './vendor/connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$see_students = mysqli_query($connect, "SELECT * FROM `see_student`");
$see_students = mysqli_fetch_all($see_students);

 if (array_key_exists('butan_read', $_POST)) {
    butan_read();
  } else if (array_key_exists('butan_read2', $_POST)) {
    butan_read2();
  }
  function butan_read()
  {
    echo "одобрено";
  }

  function butan_read2()
  {
    echo "отказ";
  }
    ?>
   <h1 style="color:red ;">men</h1>
</body>
</html>