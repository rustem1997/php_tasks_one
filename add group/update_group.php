<?php
require_once './vendor/connect.php';
$add_group = $_GET['id'];


$add_group = mysqli_query($connect, "SELECT * FROM `add_group` WHERE `id` = '$add_group'");
$add_group = mysqli_fetch_assoc($add_group);
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
            <form action="./update_group_server.php" method="post">
                <h3><b>Изменить поля группу </b></h3>
                <input type="hidden" name="id" value="<?= $add_group['id'] ?>"><br>
                <label>Названия группа</label>
                <input type="text" name="name" value="<?= $add_group['name'] ?>" placeholder="Введите свой имя">
                <label>Старт группа</label>
                <input type="date" name="start_group" value="<?= $add_group['start_group'] ?>" placeholder="Введите свой Фамилия">
                <label>Количество человек в группе</label>
                <input type="text" name="kol_group_people" value="<?= $add_group['kol_group_people'] ?>" placeholder="Введите свой email">
                <label>Конец группа</label>
                <input type="date" name="end_group" value="<?= $add_group['end_group'] ?>" placeholder="Введите свой пол">
                <label>Цена 1 урока руб</label>
                <input type="number" name="price_one_lesson" value="<?= $add_group['price_one_lesson'] ?>" placeholder="Введите свой город">
                <label>Стоимость месяц руб</label>
                <input type="number" name="price_one_month" value="<?= $add_group['price_one_month'] ?>" placeholder="Введите свой должность">
            
                <button type="submit" class="register-btn btn-success">Добавить</button>
                <a href="../add group/view_group.php" class="btn btn-danger"> выйты </a>

            </form>
        </div>
    </div>
</body>

</html>