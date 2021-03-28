<?php
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];
  $errors = array();

  // check the email and password
  require_once 'Dao.php';
  $dao = new Dao();
  $_SESSION['authenticated'] = $dao->userExist($email, $password);

  if ($_SESSION['authenticated']) {
     $_SESSION['email'] = $email;
     $_SESSION['password'] = $password;
     header("Location: ". $_SESSION['current_page']);
     exit;
  } else {
      if(strcmp($email, "") != 0){
        $errors[] = "Invalid login information.";
        $_SESSION['messages'] = $errors;
      }
      header("Location: ". $_SESSION['current_page']);
      exit;
  }