<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>

<body>
    
    <div class="panel panel-default" style="width: 95%; margin:auto;">
        <div class="panel-body">
             Профил адмистиратор <hr>
            
            Ваш имя: <?= $_SESSION['user']['full_name']?><br>
            Ваш email:<?= $_SESSION['user']['email'] ?>
            </div> 
            <!-- <a href="./edit_profil.php?id=<?= $_SESSION['user']['id']?>" class="btn btn-danger"> Изменить профиля</a> -->
            <a href="./vendor/logout.php" class="btn btn-danger"> выйты из профиля</a>
       
            
        </div>
        <div class="container">
        <div class="innerdiv">
            <div class="row"><img class="imglogo" src="./image/5.jpg"/></div>
            <div class="leftinnerdiv">
                <a href="" class="btn btn-success" >Добавить книгу</a>
                <a href="" class="btn btn-success" >Добавить группа</a>
                <a href="./add teachr/add_teachr.php" class="btn btn-success" >Добавить переподователь</a>
                <a href="" class="btn btn-success" >Посмотреть журналь</a>
                <a href="" class="btn btn-success" >Посмотреть студенты</a>
                <a href="./add teachr/view_teachr.php" class="btn btn-success" >Посмотреть переподователь</a>
            </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>