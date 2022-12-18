<?php
      session_start();
?>
<!doctype html>
<html lang = 'en'>
<head>
  <meta charset "UTF-8">
  <title>Авторизация и регистрация</title>
  <link rel="stylesheet" href="/src/main.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
</head>
<body>
<!-- форма регистрации -->

<form action ="/vendor/signup.php" method="post" enctype="multipart/form-data">
  <label>ФИО</label>
  <input type ="text" name="full_name" placeholder="Введите свое полное имя">
  <label>Логин</label>
  <input type ="text" name="login" placeholder="Введите свой логин">
  <label>Почта</label>
  <input type ="email" name="email" placeholder="Введите свою почту">
  <label>Пароль</label>
  <input type ="password" name="password" placeholder="Введите свой пароль">
  <label>Подтверждение пароля</label>
  <input type ="password" name= "password_confirm" placeholder="Введите пароль повторно">
  <button type = "submit" id="button-register">Зарегистрироваться</button>
  <p id ="p-register">
       У вас уже есть аккаунт? - <a href="/autorization/index.php" id="button-register-autorization">Войти</a>
  </p>
   <!-- // Пропадает вкладка с сообщение о неправильном вводе пароля и появляется только после ошибки -->
     <?php
        if(isset($_SESSION['registermessage'])){
          echo '<p class = "msg">' .$_SESSION['registermessage'].'</p>';
        }
        unset($_SESSION['registermessage']);

     ?>

        </form>
    </body>
</html>
