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
<!-- форма авторизации -->

<form action ="/vendor/signin.php" method ="post">
  <label>Логин</label>
  <input type ="text" name = "login" placeholder="Введите свой логин" id ="login-autorization" autocomplete="off">
  <label>Пароль</label >
  <input type ="password" name = "password" placeholder="Введите свой пароль" id="password-autorization" autocomplete="off">
  <button type = "submit" id="button-autorization" >Войти</button>
  <p id = "p-autorization">
       У вас нет аккаунта? - <a href="/autorization/register.php" id="a-autorization">Зарегистрируйтесь</a>
  </p>
  <?php if(isset($_SESSION['registermessage'])){
        if($_SESSION['registermessage']){
          echo '<p class = "msg">' . $_SESSION['registermessage'] .' </p>';
        }
      }
   unset($_SESSION['registermessage']);
   ?>



      </form>

    </body>
</html>
