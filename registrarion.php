<?php
session_start();
include('connect.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SESSION['user']['Name'] === 'administrator') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        $md5_password = md5($password);

        $stmt = $connect->prepare("INSERT INTO polzovatel2 (Email, Name, Porol_polzovately) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $login, $md5_password);

        if ($stmt->execute()) {
            header("Location: Kabinet4.php");
        } else {
            die('Ошибка записи в базу данных: ' . $stmt->error);
        }

        $stmt->close();
    }
}
?>