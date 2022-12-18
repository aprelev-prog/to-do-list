<?php
  session_start();
  require_once 'connect.php';


        $password = md5($_POST['password']);
        $login = $_POST['login'];
        // $password= $_POST['password'];
        // password_verify($password, $hash);


        $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
        if(mysqli_num_rows($check_user) > 0){

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
              "id" => $user['id'],
              "full_name" =>$user['full_name'],
              "email" =>$user['email'],
        ];

        header('Location: /autorization/todolist.php');

        }else{
          $_SESSION['registermessage'] = 'Не верный логин или пароль';
          header('Location: /autorization/index.php');
        }

       ?>
