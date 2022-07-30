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
            <form action="./add_book_server.php" method="post">
                <label>Имя</label>
                <input type="text" name="name" placeholder="Введите имя книга">
                <label>Серия</label>
                <input type="text" name="series" placeholder="Введите Серия книга">
                <label>Автор</label>
                <input type="text" name="author" placeholder="Введите Автор кинига">
                <label>Год издание </label>
                <input type="date" name="date "min="2018-01-01"  placeholder="Введите год издание">
                <label>Вес</label>
                <input type="number" name="weight" placeholder="Введите вес книга">
                <label>Страница</label>
                <input type="number" name="page" placeholder="Введите страница ">
                <button type="submit" class="register-btn btn-success">Добавить</button>
                <a href="../profile.php" class="btn btn-danger"> выйты </a>

            </form>
        </div>
    </div>
</body>

</html>