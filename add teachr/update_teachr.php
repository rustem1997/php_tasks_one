<?php
require_once './vendor/connect.php';
$add_teachr = $_GET['id'];


$add_teachr = mysqli_query($connect, "SELECT * FROM `add_teachr` WHERE `id` = '$add_teachr'");
$add_teachr = mysqli_fetch_assoc($add_teachr);
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
            <form action="update_teachr_server.php" method="post">
                <h3><b>Изменить поля переподователя</b></h3>
                <input type="hidden" name="id" value="<?= $add_teachr['id']?>"><br>
                <label>Имя</label>
                <input type="text" name="name"    value="<?= $add_teachr['name']?>" placeholder="Введите свой имя">
                <label>Фамилия</label>
                <input type="text" name="surname" value="<?= $add_teachr['surname']?>" placeholder="Введите свой Фамилия">
                <label>email</label>
                <input type="email" name="email"  value="<?= $add_teachr['email']?>" placeholder="Введите свой email">
                <label>Пол</label>
                <input type="text" name="genre"   value="<?= $add_teachr['genre']?>" placeholder="Введите свой пол">
                <label>Город</label>
                <input type="text" name="city"    value="<?= $add_teachr['city']?>"placeholder="Введите свой город">
                <label>Должность</label>
                <input type="text" name="post"    value="<?= $add_teachr['post']?>" placeholder="Введите свой должность">

                <button type="submit" class="register-btn btn-success">Добавить</button>
                <a href="../add teachr/view_teachr.php" class="btn btn-danger"> выйты </a>
               
            </form>
        </div>
    </div>
</body>

</html>