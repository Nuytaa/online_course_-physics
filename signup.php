<?php
session_start();
include('connect.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!empty($_POST['login']) && !empty($_POST['password'])) {
 $login = mysqli_real_escape_string($connect, $_POST['login']);
 $password = mysqli_real_escape_string($connect, $_POST['password']);
 $md5_password = md5($password);
 $query = "SELECT * FROM polzovatel2 WHERE Name = '".$login."' AND Porol_polzovately = '".$md5_password."'";
 $result = mysqli_query($connect, $query);


 if (mysqli_num_rows($result) > 0) {

    $user = mysqli_fetch_assoc($result);
    $_SESSION['user'] = [
       "id" => $user['id'],
       "Email" => $user['Email'],
       "Name" => $user['Name'],
       "Porol_polzovately" => $user['Porol_polzovately'],
    ];
            
    header("Location: Kabinet.php");
} 
else {
    header("Location: ErrorStr.php");
}


}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Проверяем, является ли метод POST

   // Получаем логин и пароль из формы запроса
    $username = $_POST['login'];
    $password = $_POST['password'];

    // Проверяем правильность имени пользователя и пароля
    if ($username === 'administrator' && $password === 'root') {
        // Если правильно, установите переменную сеанса, чтобы указать, что пользователь аутентифицирован
        session_start();
        $_SESSION['authenticated'] = 1;
        header('Location: Kabinet4.php'); // Перенаправление в ЛК администратора
    }
    if ($username === 'prepodavatel' && $password === 'prepodavatel') {
        session_start();
        $_SESSION['authenticated'] = 1;
        header('Location: Kabinet_prepodovatela.php'); // Перенаправление в ЛК преподавателя 
    } else {
        // Если неверно, выводим сообщение об ошибке
        $error_message = "Incorrect username or password.";
    }
}
?>

