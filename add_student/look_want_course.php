<?php
require_once './vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <title>add teachr</title>


</head>

<body>
  <div class="view_teachr">
    <table border="5" style="width: 60%;" class="table table-success table-striped">
      <thead>
        <tr>
          <!-- <th scope="col">№</th> -->
          <th scope="col">Имя</th>
          <th scope="col">Фамилия</th>
          <th scope="col">Email</th>
          <th scope="col">Город</th>
          <th scope="col" colspan="4">тел: номер</th>

        </tr>
      </thead>
      <h3 style="text-align:center ; color:blue ; padding:20px">
        <p>Список студенты хотять поступить</p>
      </h2>
      <?php

      // if (array_key_exists('butan_read', $_POST)) {
      //   butan_read();
      // } else if (array_key_exists('butan_read2', $_POST)) {
      //   butan_read2();
      // }
      function butan_read()
      {
        echo "Одобрено ";
      }

      function butan_read2()
      {
        echo "отказ";
      }



      $see_students = mysqli_query($connect, "SELECT * FROM `see_student`");
      $see_students = mysqli_fetch_all($see_students);
      foreach ($see_students as  $see_student) {
      ?>

        <tr>
          <!-- <td><?= $see_student[0] ?></td> -->
          <td><?= $see_student[1] ?></td>
          <td><?= $see_student[2] ?></td>
          <td><?= $see_student[3] ?></td>
          <td><?= $see_student[4] ?></td>
          <td><?= $see_student[5] ?></td>
          <form method="post" action="../user/function_msg.php">
            <td> <input type="submit" name="butan_read" class="button btn btn-success" value="Одебрено  " onclick="read()" /></td>
            <td> <input type="submit" name="butan_read2" class="button  btn btn-danger" value="Отказ" onclick="read2()" /></td>
          </form>

        </tr>
      <?php
      }

      ?>

    </table>
    <a href="../add_student/view_student.php" class="btn btn-danger"> выйты </a>
  </div>
</body>

</html>