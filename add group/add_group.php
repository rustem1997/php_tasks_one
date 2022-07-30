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
            <form action="./add_group_sever.php" method="post">
                <label>Названия группа</label>
                <input type="text" name="name" placeholder="Введите названия группа">
                <label>Старт группа</label>
                <input type="date" name="start_group" placeholder="Введите старт группа">
                <label>Количество человек в группе</label>
                <input type="text" name="kol_group_people" placeholder="Введите кол чел">
                <label>Конец группа</label>
                <input type="date" name="end_group" placeholder="Введите конец группа">
                <label>Цена 1 урока руб</label>
                <input type="number" name="price_one_lesson" placeholder="Введите цена 1 урок">
                <label>Стоимость месяц руб</label>
                <input type="number" name="price_one_month" placeholder="Введите стоимость месяц">

                <button type="submit" class="register-btn btn-success">Добавить</button>
                <a href="../profile.php" class="btn btn-danger"> выйты </a>

            </form>
        </div>
    </div>
</body>

</html>