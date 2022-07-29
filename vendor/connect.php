<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'test1');

    if (!$connect) {
        die('Error connect to DataBase');
    }