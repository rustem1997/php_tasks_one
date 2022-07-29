<?php

// ------------------
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];


$error_fields = [];
if ($full_name === '') {
    $error_fields[] = 'full_name';
}
if ($login === '') {
    $error_fields[] = 'login';
}
if ($email === '') {
    $error_fields[] = 'email';
}
if ($password === '') {
    $error_fields[] = 'password';
}
if ($password_confirm === '') {
    $error_fields[] = 'password_confirm';
}

if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}
// -------------------

$check_full_name = mysqli_query($connect, "SELECT * FROM `users` WHERE `full_name` = '$full_name'");
if (mysqli_num_rows($check_full_name) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой имя уже существует",
        "fields" => ['full_name']
    ];
    echo json_encode($response);
    die();
}

$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
if (mysqli_num_rows($check_login) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой login уже существует",
        "fields" => ['login']
    ];
    echo json_encode($response);
    die();
}
$check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
if (mysqli_num_rows($check_email) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой email уже существует",
        "fields" => ['email']
    ];
    echo json_encode($response);
    die();
}
$error_fields = [];

// -------------------------------------
if ($password === $password_confirm) {

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");

    $response = [
        "status" => true,
        "message" => "Регистрация прошла успешно!",
    ];
    echo json_encode($response);
    header("Location: ./auth.php");

} else {
    $response = [
        "status" => false,
        "message" => "Пароли не совпадают",
    ];
    echo json_encode($response);
    
}
header("Location: ./auth.php");
?>
