<?php
    session_start();
    include('connect.php');
    
    $sql = "SELECT * FROM `polzovatel2`";
    $result = mysqli_query($connect, $sql);
    
    $query099 = "SELECT name_student, ocenka, tema FROM yspevaemost GROUP BY name_student, ocenka, tema";
    // Вывод таблицы
    $result099 = mysqli_query($connect, $query099);

    if(!isset($_SESSION['user'])) {
      header("Location: Courses2.php");
      exit();
    }
    
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="logotip.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="Kabinet2.css">

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
          <a class="nav-item" href="Courses3.php">Главная</a>
          <a class="nav-item" href="AboutUs3.html">О курсе</a>
          <a class="nav-item" href="Kabinet_prepodovatela.php">Личный кабинет</a>
        </div>
      </div>
    </div>
  </div>

 
    <a class="text_user">Привет, <?= $_SESSION['user']['Name'] ?> !</a>
    <a class="text_user"><?= $_SESSION['user']['Email'] ?></a>


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
 <!--  <tr>
      <td contenteditable="true"></td>
      <td contenteditable="true"></td>
      <td contenteditable="true"></td>
      <td><button onclick="deleteRow(this)">Удалить</button></td>
    </tr>
  </tbody>
</table>
<button class="button_dobavit" onclick="addRow()">Добавить строку</button>
<button class="button_save" onclick="saveTable()">Сохранить таблицу</button> -->

  <title>Форма загрузки файла</title>
</head>
<body>
    <!-- <h1 style="color: white">Форма загрузки файла</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data" style="color: white">
        <input type="file" name="file_name" style="color: white"> 
        <input type="submit" value="Отправить">
    </form> -->



<?php
  if($connect) {
    echo '<form action="logout.php" method="post">
           <input type="submit" name="submit" class="exit" value="Выйти">
          </form>';
  }
  ?> 

  <!-- <script>
    // функция добавления новой строки в таблицу
function addRow() {
  var table = document.getElementById("myTable").getElementsByTagName("tbody")[0];
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  cell1.contentEditable = true;
  cell2.contentEditable = true;
  cell3.contentEditable = true;
  cell4.innerHTML = "";
  cell5.innerHTML = '<button onclick="deleteRow(this)">Удалить</button>';
}

// функция удаления строки из таблицы
function deleteRow(btn) {
  var row = btn.parentNode.parentNode;
  row.parentNode.removeChild(row);
}

// функция сохранения таблицы
function saveTable() {
  var table = document.getElementById("myTable");
  var rows = table.rows;
  var data = [];
  for (var i = 1; i < rows.length; i++) {
    var cells = rows[i].cells;
    data.push({
      name: cells[0].innerText,
      quantity: cells[1].innerText,
      price: cells[2].innerText,
      total: cells[3].innerText
    });
  }
  localStorage.setItem("data", JSON.stringify(data));
}

// функция загрузки таблицы из сохраненных данных
function loadTable() {
  var data = JSON.parse(localStorage.getItem("data"));
  var table = document.getElementById("myTable").getElementsByTagName("tbody")[0];
  for (var i = 0; i < data.length; i++) {
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    cell1.innerText = data[i].name;
    cell2.innerText = data[i].quantity;
    cell3.innerText = data[i].price;
    cell4.innerText = data[i].total;
    cell5.innerHTML = '<button onclick="deleteRow(this)">Удалить</button>';
  }
}

loadTable();
  </script> -->


  <script src="Course.js"></script>
</body>

</html>