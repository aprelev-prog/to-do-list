<?php
session_start();
 require_once 'connect.php';



$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

print_r($_POST);

  if ($password === $password_confirm)
{
//con..


      $password =md5($password);
     // $hash = password_hash($password, PASSWORD_BCRYPT);
     // $password = $hash;



    mysqli_query($connect, "INSERT INTO `user` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");

    $_SESSION['registermessage'] = 'Регистрация прошла успешно!';
    header('Location: /autorization/index.php');

  }

else{

  $_SESSION['registermessage'] = 'Пароли не совпдают';
  header('Location: /autorization/register.php');
  exit();

}



    ?>
