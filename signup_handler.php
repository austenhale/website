<?php
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];
  $repeatPassword = $_POST['repeatPassword'];
  $errors = array();
  $errored = 0;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors[] = "Invalid email address format.";
      header('Location: signup.php');
      $errored = 1;
  }
  if (strcmp($password, $repeatPassword) != 0){
     $errors[] = "Passwords don't match. \n$password \n$repeatPassword";
     header('Location: signup.php');
     $errored = 1;
  }

  if ($errored == 1){
     $_SESSION['messages'] = $errors;
     exit;
  }
  // check the email and password
  require_once 'Dao.php';
  $dao = new Dao();
  $salt = "aocj;l!!!akjfp8pq8980q4p;hlafidhjspc8q923on_169";
  $saltPassword = hash("sha256", $salt."pepper123!#@$".$password);
  $_SESSION['authenticated'] = $dao->makeUser($email,$saltPassword);

  if ($_SESSION['authenticated']){
     $_SESSION['email'] = $email;
     header('Location: home.php');
     exit;
  }else {
   header('Location: signup.php');
   exit;
  }
  

