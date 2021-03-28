<?php
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
   $_SESSION['messages'] = "Invalid email address format.";
   header('Location: signup.php');
   exit;
  }
  // check the email and password
  require_once 'Dao.php';
  $dao = new Dao();
  $_SESSION['authenticated'] = $dao->makeUser($email,$password);

  if ($_SESSION['authenticated']){
     $_SESSION['email'] = $email;
     header('Location: home.php');
     exit;
  }else {
   header('Location: signup.php');
   exit;
  }
  

