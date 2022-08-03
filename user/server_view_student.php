<?php
require_once './vendor/connect.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add teachr</title>
  <link rel="stylesheet" href="../assets/css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="../style.css"> -->
</head>

<body>

  <!-- Форма регистрации -->


  <div class="add_teachr">
    <div class="leftinnerdiv">
      <form action="./action_see_student.php" method="post">
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите имя">
        <label>Фамилия</label>
        <input type="text" name="surname" placeholder="Введите  Фамилия">
        <label>email</label>
        <input type="email" name="email" placeholder="Введите свой email">
        <label>Город</label>
        <input type="text" name="city" placeholder="Введите свой город">
        <label>Тел:номер</label>
        <input type="tel " name="tel_number" placeholder="+375 ** *** *** **">
        <button type="submit" class="register-btn btn-success">Добавить</button>
        <a href="../user/view_user/view_group.php" class="btn btn-danger"> выйты </a>

      </form>
    </div>
  </div>
</body>

</html>