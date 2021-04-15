<?php
  session_start();
  require_once 'Dao.php';
  $dao = new Dao();

  $email = $_POST['email'];
  $password = $_POST['password'];
  $repeatPassword = $_POST['repeatPassword'];
  $favorite_animal = $_POST['favoriteAnimal'];
  $_SESSION['email'] = $email;
  $_SESSION['favoriteAnimal'] = $favorite_animal;
  $errors = array();
  $errored = 0;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors[] = "Invalid email address format.";
      header('Location: signup.php');
      unset($_SESSION['email']);
      $errored = 1;
  }
  if (strcmp($password, $repeatPassword) != 0){
     $errors[] = "Passwords don't match.";
     header('Location: signup.php');
     $errored = 1;
  }
  $salt = "aocj;l!!!akjfp8pq8980q4p;hlafidhjspc8q923on_169";
  $saltPassword = hash("sha256", $salt."pepper123!#@$".$password);
  if ($dao->userExist($email, $saltPassword)){
     $errors[] = "User with that email already exists";
     header('Location: signup.php');
     unset($_SESSION['email']);
     $errored = 1;
  }

  if ($errored == 1){
     $_SESSION['messages'] = $errors;
     exit;
  }
  // check the email and password
  
  
  $_SESSION['authenticated'] = $dao->makeUser($email,$saltPassword, $favorite_animal);

  if ($_SESSION['authenticated']){
     $_SESSION['email'] = $email;
     header('Location: home.php');
     exit;
  }else {
   header('Location: signup.php');
   exit;
  }
  

