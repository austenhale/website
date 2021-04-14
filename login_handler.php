<?php
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];
  $messages = array();

  // check the email and password
  require_once 'Dao.php';
  $dao = new Dao();
  $salt = "aocj;l!!!akjfp8pq8980q4p;hlafidhjspc8q923on_169";
  $saltPassword = hash("sha256", $salt."pepper123!#@$".$password);
  $_SESSION['authenticated'] = $dao->userExist($email, $saltPassword);

  if ($_SESSION['authenticated']) {
     $_SESSION['email'] = $email;
     $_SESSION['password'] = $password;
     $messages[] = "Thanks for logging in.";
     $_SESSION['messages'] = $messages;
     header("Location: ". $_SESSION['current_page']);
     exit;
  } else {
      if(strcmp($email, "") != 0){
        $messages[] = "Invalid login information.";
        $_SESSION['messages'] = $messages;
      }
      header("Location: ". $_SESSION['current_page']);
      exit;
  }