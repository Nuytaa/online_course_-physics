// 
<?php
session_start();
include('connect.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SESSION['user']['Name'] === 'administrator' && isset($_GET['delete_id'])) {
    $id = mysqli_real_escape_string($connect, $_GET['delete_id']);
    $sql = "DELETE FROM polzovatel2 WHERE id = '$id'";
    if ($connect->query($sql) === TRUE) {
        header("Location: Kabinet4.php");
        exit();
    } else {
        die('Ошибка записи в базу данных: ' . $connect->error);
    }
} else {
    header("Location: Kabinet4.php");
    exit();
}
