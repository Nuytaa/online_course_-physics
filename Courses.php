<?php
    session_start();
    include('connect.php');
    include('signup.php');
?>


<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="logotip.png">
  <head>
        <section>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </section>
    <meta charset="utf-8">

    <link rel="stylesheet" href="strAvtorizOsnova.css">
    <link rel="stylesheet" href="baton2.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Solitreo&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <title>Онлайн-курс. Физика</title>
  </head>
  <body>
    <div class="header">
        <div class="container">
            <div class="header-line">
                <div class="header-logo">
                    <img src="logotip.png" alt="">
                </div>
                <div class="nav">
                    <a class = "nav-item" href="Courses.php">Главная</a>
                    <a class = "nav-item" href="AboutUs.html">О курсе</a>
                    <?php
                     $sql = "SELECT Name, Porol_polzovately FROM `polzovatel2` ";
                     $connect -> query($sql);
                     if($connect) {
                        echo '<a class = "nav-item" href="Kabinet.php">Личный кабинет</a>';
                    }
                    else {
                        echo "Войдите в профиль";
                    }
                    ?>  
                </div>


            </div>
            <div class="header-down">
                <div class="header-title">Погрузись в физику <br> с улыбкой! </div>  
            </div>
            <div class="text-down">Этот курс поможет подготовиться к экзаменам,<br> справиться со сложными задачками и улучшить свои оценки.</div>
        </div>
    </div>
    

    <script src="Course.js"></script>
  </body>
</html>
