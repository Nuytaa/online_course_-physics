<?php 
session_start();
include('connect.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);
if(!isset($_SESSION['user'])) {
    header("Location: Courses2.php");
    exit();
  }

    $info = [];
    if($query = $connect -> query("SELECT * FROM `lesson` WHERE id_lesson = 3")) {
        $info = $query -> fetch_all(PDO:: FETCH_ASSOC);
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

    <link rel="stylesheet" href="inertia.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Solitreo&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <title>Инерция</title>
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
            </div>
        </div>

        <div class="photo_atomov1">
            <img src="photo/50404.jpg" wight="200px" height="250px">
        </div>
        <div class="teoriy">Теория</div>

        <?php foreach($info as $sd): ?>
            <div class="opredelenie" ><span class="ves"><?php echo $sd[1]; ?></span> 
                <?php echo $sd[2]; ?>
            </div>
        <?php endforeach; ?>
        
        <div class="photo_atomov">
            <img src="photo/50403.jpg" wight="200px" height="250px">
        </div>

        <?php foreach($info as $sd): ?>
        <div class="container_video1">
            <div class="video">
                <iframe src="<?php echo $sd[5]; ?>" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="formula_text"><span class="ves">Первый закон Ньютона<br> </span><br><?php echo $sd[3]; ?></div> 

        <div class="photo_atomov3">
            <img src="photo/50402.jpg" wight="200px" height="250px">
        </div>

        <div class="btn-3">
            <a class="button3" href="test3html.php" id="open_pop_up5">Начать тест</a>
        </div>

    </div>
    <script src="Course.js"></script>

</body>
</html>