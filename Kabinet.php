 <?php
    session_start();
    include('connect.php');
    if(!isset($_SESSION['user'])) {
      header("Location: Courses2.php");
      exit();
    }
    
    $sql = "SELECT * FROM `polzovatel2`";
    $result = mysqli_query($connect, $sql);
    $USERNAME = $_SESSION['user']['Name'];

    // $sqly = "SELECT tema FROM `yspevaemost`";
    // $resulty = mysqli_query($connect, $sqly);

    
    $query01 = "SELECT name_student, tema, MAX(ocenka) AS best_result FROM yspevaemost GROUP BY name_student, tema";
    // $v_ocenka= "SELECT name_student, tema, MAX(ocenka) AS best_result FROM yspevaemost WHERE name_student = '$USERNAME2'"; 
    // $query01 = "SELECT * FROM yspevaemost WHERE name_student = '$USERNAME' ORDER BY ocenka DESC LIMIT 1";
    $result01 = mysqli_query($connect, $query01);
    // $v_ocenka2 = mysqli_query($connect, $v_ocenka);
   
    $query099 = "SELECT * FROM yspevaemost WHERE name_student = '$USERNAME' ORDER BY ocenka";
    // Вывод таблицы
    $result099 = mysqli_query($connect, $query099);

    if (mysqli_num_rows($result01) > 0) {
   
       $bestresult = mysqli_fetch_assoc($result01);
       $_SESSION['bestresult'] = [
          "id_student" => $bestresult['id_student'],
          "name_student" => $bestresult['name_student'],
          "ocenka" => $bestresult['ocenka'],
          "tema" => $bestresult['tema']
       ];
      } 
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="logotip.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="Kabinet.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Solitreo&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <title>Личный кабинет</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="header-line">
        <div class="header-logo2">
          <img src="logotip.png" alt="">
        </div>
        <div class="nav">
          <a class="nav-item" href="Courses.php">Главная</a>
          <a class="nav-item" href="AboutUs.html">О курсе</a>
          <a class="nav-item" href="Kabinet.php">Личный кабинет</a>
        </div>
      </div>
    </div>
  </div>

  <?php
    if($connect) {
      echo '<form action="logout.php" method="post">
             <input type="submit" class="exit" name="submit" value="Выйти">
            </form>';
    }
  ?>  


    <a class="text_user">Привет, <?= $_SESSION['user']['Name'] ?> !</a>
    <a class="text_user"><?= $_SESSION['user']['Email'] ?></a>

  <!-- Объявляем переменную для вывода лучшего результата -->

  

  <div class="cards">
    <div class="card1">
      <div class="container2">
        <h4>Вес тела</h4>
          <a href="ves_tela.php" class="button2">Перейти к уроку</a>
      </div>
    </div>
    <div class="card2">
      <div class="container2">
        <h4>Закон Гука</h4>
        <a href="zakon_guka.php" class="button2">Перейти к уроку</a>
        <a></a>
      </div>
    </div>
    <div class="card3">
      <div class="container2">
        <h4>Инерция</h4>
        <a href="inertia.php" class="button2">Перейти к уроку</a>
        <a></a>
      </div>
    </div>
  </div>
  
  <table id="myTable">
  <thead>
    <tr>
      <th class="Pole_student">Имя студента</th>
      <th class="Pole_student">Оценка</th>
      <th class="Pole_student">Тема</th>
    </tr>
    <tr>
    <?php foreach($result099 as $sd099): ?>
      <th class="Pole_student"><?php echo $sd099['name_student'] ?></th>
      <th class="Pole_student"><?php echo $sd099['ocenka'] ?></th>
      <th class="Pole_student"><?php echo $sd099['tema'] ?></th>
    </tr>
    <?php endforeach; ?>
  </thead>
  <tbody>
    
   <!-- <div class="card4">
      <div class="container2">
        <h4>Свободное падение</h4>
        <a href="" class="button2">Перейти к уроку</a>
      </div>
    </div>
    <div class="card5">
      <div class="container2">
        <h4>Сила и масса</h4>
        <a href="" class="button2">Перейти к уроку</a>
      </div>
    </div>
    <div class="card6">
      <div class="container2">
        <h4>Равноускоренное движение</h4>
        <a href="" class="button2">Перейти к уроку</a>
      </div>
    </div> -->


  <script src="Course.js"></script>
</body>

</html>