<?php
session_start();
include('connect.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Проверка подключения
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}


  $answers = array("a", "b", "a", "a"); // массив правильных ответов в порядке вопросов
  $score = 0; // счетчик правильных ответов
  
  // проверяем ответы на правильность
  if (isset($_POST['q1']) && $_POST['q1'] == $answers[0]) {
    $score++;
  }
  
  if (isset($_POST['q2']) && $_POST['q2'] == $answers[1]) {
    $score++;
  }
  
  if (isset($_POST['q3']) && $_POST['q3'] == $answers[2]) {
    $score++;
  }
  
  if (isset($_POST['q4']) && $_POST['q4'] == $answers[3]) {
    $score++;
  }
  
  // выводим результаты теста
  echo "Вы ответили правильно на " . $score . " вопросов.";
                                  
  $username = $_SESSION['user']['Name'];
  $querys = "SELECT tema FROM lesson WHERE id_lesson = 2"; 
$resultss = mysqli_query($connect, $querys);
$rows = mysqli_fetch_assoc($resultss); 
$tema = $rows['tema']; 

  $sqlll = "INSERT INTO yspevaemost (name_student, ocenka, tema) VALUES ('$username', '$score', '$tema')";

  if (mysqli_query($connect, $sqlll)) {
        header("Location:Kabinet.php");
  } else {
      echo "Ошибка" . $sqlll . "<br>" . mysqli_error($connect);
  }
?>