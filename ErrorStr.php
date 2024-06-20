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
                    <a class = "nav-item" href="AboutUs2.html">О нас</a>
                </div>

                
                    <div class="BTN2">
                        <a class="button2_1" href="#" id="open_pop_up11">Войти</a>
                    </div>
                    <div class="pop_up" id="pop_up11">
                        <div class="pop_up_container">
                            <div class="pop_up_body" id="pop_up_body11">
                                <p>Войти</p>
                                <form action="signup.php" method="post">
                                    <input type="text" name="login" placeholder="Логин" required>
                                    <input type="password" name="password" placeholder="Пароль" required>
                                    <button type="submit">Войти!</button>
                                </form>
                                <div class="pop_up_close" id="pop_up_close11">&#10006</div>
                            </div>
                        </div>
                    </div>


            </div>
            <div class="header-down">
                <div class="text-down">Неправильный логин или пароль !</div>  
            </div>

            <style>
                .text-down {
                    margin-top: 200px;
                    font-size: 30px;
                }
            </style>
        </div>
    </div>
    <script>
        const openPopUp2 = document.getElementById('open_pop_up11');
        const closePopUp2 = document.getElementById('pop_up_close11');
        const popUp2 = document.getElementById('pop_up11');

        openPopUp2.addEventListener('click', function(e){
        e.preventDefault();
        popUp2.classList.add('active');
        })

        closePopUp2.addEventListener('click', () => {
        popUp2.classList.remove('active');
        })
    </script>
  </body>
</html>