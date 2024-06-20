<?php 
session_start();
include('connect.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(!isset($_SESSION['user'])) {
    header("Location: Courses2.php");
    exit();
  }

    $info2 = [];
    if($query = $connect -> query("SELECT * FROM `lesson` WHERE id_lesson = 2")) {
        $info2 = $query -> fetch_all(PDO:: FETCH_ASSOC);
        // print_r($info);
    } 
    else {
        print_r($connect->errorInfo());
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="logotip.png">
    <meta charset="utf-8">

    <link rel="stylesheet" href="figna.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Solitreo&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <title>Закон Гука</title>
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
                    <a class="nav-item" href="Kabinet.php">Личный кабинет</a> 
                </div>

             <!--   <div class="btn-1">
                    <a class="button" href="#" id="open_pop_up">Зарегиcтрироваться</a>
                </div> -->
                <div class="pop_up" id="pop_up">
                    <div class="pop_up_container">
                        <div class="pop_up_body" id="pop_up_body">
                            <p>Зарегистрироваться</p>
                            <form action="">
                                <input type="email" name="email" placeholder="Почта">
                                <input type="file" name="avatar" placeholder="Фото">
                                <input type="text" name="login" placeholder="Логин">
                                <input type="password" name="password" placeholder="Пароль">
                                <input type="submit">
                            </form>
                            <div class="pop_up_close" id="pop_up_close">&#10006</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="teoriy">Теория</div>

       <?php foreach($info2 as $sd): ?>
        <div class="opredelenie"><span class="ves"><?php echo $sd[1]; ?></span> 
            <?php echo $sd[2]; ?>
        </div>
        <?php endforeach; ?>

        <!--<div class="opredelenie"><span class="ves">Сила упругости</span> это сила, 
            возникающая в теле в результате<br> его деформации и стремящаяся вернуть тело в исходное <br>положение.
        </div>

        <div class="opredelenie"><span class="ves">Деформация</span> - изменение формы или размеров тела, <br>
            происходящее из-за неодинакового смещения различных<br> частей одного и того же тела в результате воздействия <br>другого тела. 
            Виды деформаций: сжатие, растяжение, <br>изгиб, сдвиг, кручение.
        </div>-->

        <div class="container_video1">
            <div class="video">
                <iframe src="<?php echo $sd[5]; ?>" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen></iframe>
            </div>
        </div>

        <!-- <div class="formula_text">Формула: F упр = k ⋅ Δ l </div> -->

        <div class="container_video2">
            <div class="video2">
                <iframe src="https://www.youtube.com/embed/C5TIQa8m0bQ" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen></iframe>
            </div>
        </div>

        <div class="btn-3">
            <a class="button3" href="test2html.php" id="open_pop_up5">Начать тест</a>
        </div>

    </div>
    <script src="Course.js"></script>
  </body>