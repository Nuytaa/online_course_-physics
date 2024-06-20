<?php
session_start();
include('connect.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Проверка подключения
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}



// Запрос для получения вопросов и ответов из базы данных
$sql = "SELECT * FROM variant_otvetov WHERE id_test=1";
$sql1 = "SELECT otvet1, otvet2, otvet3, otvet4 FROM variant_otvetov WHERE id_test=1";


$result = $connect->query($sql);
$result1 = $connect->query($sql1);

$info = [];
  if($query = $connect -> query("SELECT otvet1, otvet2, otvet3, otvet4  FROM variant_otvetov WHERE id_test=1")) {
      $info = $query -> fetch_all(PDO:: FETCH_ASSOC);
  } 
  else {
    print_r($connect->errorInfo());
}

$sql2 = "SELECT * FROM variant_otvetov WHERE id_test=2";
$sql3 = "SELECT otvet1, otvet2, otvet3, otvet4 FROM variant_otvetov WHERE id_test=2";


$result2 = $connect->query($sql2);
$result3 = $connect->query($sql3);

$info2 = [];
  if($query = $connect -> query("SELECT otvet1, otvet2, otvet3, otvet4  FROM variant_otvetov WHERE id_test=2")) {
      $info2 = $query -> fetch_all(PDO:: FETCH_ASSOC);
  } 
  else {
    print_r($connect->errorInfo());
}

$sql4 = "SELECT * FROM variant_otvetov WHERE id_test=6";
$sql5 = "SELECT otvet1, otvet2, otvet3, otvet4 FROM variant_otvetov WHERE id_test=6";


$result4 = $connect->query($sql4);
$result5 = $connect->query($sql5);

$info3 = [];
  if($query = $connect -> query("SELECT otvet1, otvet2, otvet3, otvet4  FROM variant_otvetov WHERE id_test=6")) {
      $info3 = $query -> fetch_all(PDO:: FETCH_ASSOC);
  } 
  else {
    print_r($connect->errorInfo());
}

$sql6= "SELECT * FROM variant_otvetov WHERE id_test=7";
$sql7 = "SELECT otvet1, otvet2, otvet3, otvet4 FROM variant_otvetov WHERE id_test=7";


$result6 = $connect->query($sql6);
$result7 = $connect->query($sql7);

$info4 = [];
  if($query = $connect -> query("SELECT otvet1, otvet2, otvet3, otvet4  FROM variant_otvetov WHERE id_test=7")) {
      $info4 = $query -> fetch_all(PDO:: FETCH_ASSOC);
  } 
  else {
    print_r($connect->errorInfo());
}

?>


<!doctype html>
<html lang="en">
 
<head>

  <meta charset="UTF-8" />
  <title>Вес тела</title>
  <link rel="shortcut icon" href="logotip.png">
    
  <link rel="stylesheet" href="test1.css">
  
   
  <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
 
        *, *:before, *:after {margin: 0; padding: 0; box-sizing: border-box;}
        body {
            font: 14px 'Open Sans', 
            sans-serif;
	        background: linear-gradient(-45deg, #0d00a1,#8db9eb);
	        background-size: 400% 400%;
	        animation: gradient 10s ease infinite;
	        height: 100vh;
            color:white;
}

    @keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
        
 
        .top { padding-right: 20px; background: #261F41; text-align: right; }
        a { color: rgba(255,255,255,0.6); text-transform: uppercase; text-decoration: none; line-height: 42px; }
 
        h1 {padding: 50px 0; font-weight: 400; text-align: center;}
         
        .main {margin: 0 auto; max-width: 500px;}
        .main .quizsection {margin-bottom: 20px;}

        .otpravka {
            margin-left: 200px;
            margin-bottom: 20px;
            border: none;
            display: inline-block;
            position: relative;
            color: #fff;
            font-size: 1.2rem;
            background: linear-gradient(to right, #0162c8, #55e7fc);
            padding: 0.8rem 1.75rem;
            border-radius: 1.8rem;
            overflow: hidden;
        }

        .otpravka:hover {
            cursor: pointer;
        }
 </style>
  
</head>
 
<body>
 
<h1>Тест по теме "Вес тела"</h1>
 
<section class="main">
<meta charset="UTF-8" />
<form action="quiz.php" method = "post">


<?php foreach($result as $sd): ?>
    <!-- Заголовок с вопросом -->
    <h2 class="title"><?php echo $sd['vopros']; ?></h2>
<?php endforeach; ?>

<?php foreach($info as $sd1): ?>
    <div class="answer">
        <input type="radio" value="a" name="q1" id="value1">
        <span><?php echo $sd1[0]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="b" name="q1" id="value2">
        <span><?php echo $sd1[1]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="c" name="q1" id="value3">
        <span><?php echo $sd1[2]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="d" name="q1" id="value4">
        <span><?php echo $sd1[3]; ?></span>
    </div>
    <?php endforeach; ?>


    <?php foreach($result2 as $sd2): ?>
            <!-- Заголовок с вопросом -->
                <h2 class="title"><?php echo $sd2['vopros']; ?></h2>
            <?php endforeach; ?>

    <?php foreach($info2 as $sd2): ?>
    <div class="answer">
        <input type="radio"value="a" name="q2" id="value1">
        <span><?php echo $sd2[0]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="b" name="q2" id="value2">
        <span><?php echo $sd2[1]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="c" name="q2" id="value3">
        <span><?php echo $sd2[2]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="d" name="q2" id="value4">
        <span><?php echo $sd2[3]; ?></span>
    </div>
    <?php endforeach; ?>

    <?php foreach($result4 as $sd3): ?>
            <!-- Заголовок с вопросом -->
                <h2 class="title"><?php echo $sd3['vopros']; ?></h2>
            <?php endforeach; ?>
 
    <?php foreach($info3 as $sd3): ?>
    <div class="answer">
        <input name="q3" value="a" id="value1" type="radio" /> 
        <span><?php echo $sd3[0]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q3" value="b" id="value2" type="radio" />
        <span><?php echo $sd3[1]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q3" value="c" id="value3" type="radio" />
        <span><?php echo $sd3[2]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q3" value="d" id="value4" type="radio" />
        <span><?php echo $sd3[3]; ?></span>
    </div>
    <?php endforeach; ?>

 
    <?php foreach($result6 as $sd4): ?>
            <!-- Заголовок с вопросом -->
                <h2 class="title"><?php echo $sd4['vopros']; ?></h2>
            <?php endforeach; ?>
 
    <?php foreach($info4 as $sd4): ?>
    <div class="answer">
        <input name="q4" value="a" id="value1" type="radio" /> 
        <span><?php echo $sd4[0]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q4" value="b" id="value2" type="radio" />
        <span><?php echo $sd4[1]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q4" value="c" id="value3" type="radio" />
        <span><?php echo $sd4[2]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q4" value="d" id="value4" type="radio" />
        <span><?php echo $sd4[3]; ?></span>
    </div>
    <?php endforeach; ?>

  <br>  
  <input type="submit" method = "post" class="otpravka" value="Отправить">
</form>



<script language='JavaScript1.2'>
    
    if (window.Event)
    document.captureEvents(Event.MOUSEUP);
     
    function nocontextmenu() {
    event.cancelBubble = true, event.returnValue = false;
     
    return false;
    }
     
    function norightclick(e) {
    if (window.Event) {
    if (e.which == 2 || e.which == 3) return false;
    }
    else if (event.button == 2 || event.button == 3) {
    event.cancelBubble = true, event.returnValue = false;
    return false;
    }
    }
     
    if (document.layers)
    document.captureEvents(Event.MOUSEDOWN);
     
    document.oncontextmenu = nocontextmenu;
    document.onmousedown = norightclick;
    document.onmouseup = norightclick;
    </script> 

</body>
</html>

