<?php
  session_start();
  include('connect.php');
  include('signup.php');
  // include('delete_user.php');

    $sql = "SELECT * FROM `polzovatel2`";
    $result = mysqli_query($connect, $sql);
    
    $query_admin = "SELECT * FROM polzovatel2 WHERE Name NOT IN ('administrator', 'prepodavatel')";
    // Вывод таблицы
    $result_admin = mysqli_query($connect, $query_admin);

    if(!isset($_SESSION['user'])) {
      header("Location: Courses2.php");
      exit();
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
          <a class="nav-item" href="Courses4.php">Главная</a>
          <a class="nav-item" href="AboutUs4.html">О курсе</a>
          <a class="nav-item" href="Kabinet4.php">Личный кабинет</a>
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

      <div class="button_administration">
        <div class="btn-1">
          <a class="button" href="#" id="open_pop_up">Зарегистрировать студента</a>
        </div>
          <div class="pop_up" id="pop_up">
            <div class="pop_up_container">
              <div class="pop_up_body" id="pop_up_body">
                <p>Зарегистрировать</p>
                <form action="registrarion.php" method="post">
                  <input type="email" name="email" placeholder="Почта" required>
                  <input type="text" name="login" placeholder="Логин" required>
                  <input type="password" name="password" placeholder="Пароль" required>
                  <button type="submit">Отправить!</button>
                </form>
                <div class="pop_up_close" id="pop_up_close">&#10006</div>
              </div>
            </div>
          </div>
      </div>



<table id="myTable" class="myTable">
  <thead>
    <tr>
      <th class="Pole_student">Почта студента</th>
      <th class="Pole_student">Имя</th>
      <th class="Pole_student">Удалить</th>
    </tr>
    <?php foreach($result_admin as $sd_admin): ?>
      <tr>
        <th class="Pole_student"><?php echo $sd_admin['Email'] ?></th>
        <th class="Pole_student"><?php echo $sd_admin['Name'] ?></th>
        <th class="Pole_student"><button type="button" onclick="location.href='delete_user.php?delete_id=<?php echo $sd_admin['id'] ?>'">Удалить</button></th>
      </tr>
    <?php endforeach; ?>
    </thead>
</table>





      <style>
        /* Стили для таблицы */
        #myTable {
          display: flex;
          align-items: center;
          justify-content: center;
          grid-template-columns: repeat(2, 1fr);
        }

        .Pole_student {
          border: 1px solid black;
          padding: 5px;
          text-align: center;
        }

      </style>


  <script src="Course.js"></script>
</body>

</html>