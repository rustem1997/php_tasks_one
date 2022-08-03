<?php

require_once './vendor/connect.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
  header('location:auth.php');
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Авторизация и регистрация</title>
  <link rel="stylesheet" href="../style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <div class="innerdiv">
      <div class="row"><img class="imglogo" src="/image/1.jpg" /></div>
      <div class="leftinnerdiv">

        <a href="./look_want_course.php" class="btn btn-success">Посмотреть список хотять поступить на курсе </a>
        <a href="../add_student/see_student.php" class="btn btn-success">Посмотреть всех пользователей</a>

        <a href="/profile.php" class="btn btn-danger"> выйты </a>
      </div>
    </div>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>