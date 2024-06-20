<?php
    session_start();
    include('connect.php');
    include('signup.php');
?>


<!DOCTYPE html>
<html>
  <head>
    

    <link rel="shortcut icon" href="logotip.png">
    <meta charset="utf-8">

    <link rel="stylesheet" href="Courses.css">
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
    <div class="header">
        <div class="container">
            <div class="header-line">
                <div class="header-logo">
                    <img src="logotip.png" alt="">
                </div>
                <div class="nav">
                    <a class = "nav-item" href="Courses2.php">Главная</a>
                    <a class = "nav-item" href="AboutUs2.html">О курсе</a>
                </div>


                <div class="btn-1 none">
                    <a class="button" href="#" id="open_pop_up">Зарегиcтрироваться</a>
                </div>
                <div class="pop_up" id="pop_up">
                    <div class="pop_up_container">
                        <div class="pop_up_body" id="pop_up_body">
                            <p>Зарегистрироваться</p>
                            <form action="registrarion.php" method="post">
                                <input type="email" name="email" placeholder="Почта" required>
                                <input type="text" name="login" placeholder="Логин" required>
                                <input type="password" name="password" placeholder="Пароль" required>
                                <button type="submit">Зарегистрироваться!</button>
                            </form>
                            <div class="pop_up_close" id="pop_up_close">&#10006</div>
                        </div>
                    </div>
                </div> 
                <style>
                .none {
                    display: none !important;
                }
                </style>
                
                    <div class="BTN2">
                        <a class="button2_1" href="#" id="open_pop_up2">Войти</a>
                    </div>
                    <div class="pop_up" id="pop_up2">
                        <div class="pop_up_container">
                            <div class="pop_up_body" id="pop_up_body2">
                                <p>Войти</p>
                                <form action="signup.php" method="post">
                                    <input type="text" name="login" placeholder="Логин" required>
                                    <input type="password" name="password" placeholder="Пароль" required>
                                    <button type="submit">Войти!</button>
                                </form>
                                <div class="pop_up_close" id="pop_up_close2">&#10006</div>
                            </div>
                        </div>
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
