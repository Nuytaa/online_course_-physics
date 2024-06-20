

<?php
    session_start();
    include('connect.php');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $file_name = $_FILES['id']['file_name'];


    $sql = "INSERT INTO file (id, file_name) VALUES (DEFAULT, '$file_name')";


    if (!$connect) {
    die('Ошибка записи в базу данных: ' . mysqli_error($connect));
    }
?> 