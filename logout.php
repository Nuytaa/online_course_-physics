<?php 
include('connect.php');
session_start(); // начинаем новую сессию
session_unset(); // удаляем все переменные сессии
session_destroy(); // уничтожаем сессию
header("location: Courses2.php"); // перенаправляем пользователя на страницу входа
?>