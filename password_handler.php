<html>
<link rel="stylesheet" href="style.css">
<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']){
    header('Location: home.php');
    exit;
}
  require_once 'Dao.php';
  $dao = new Dao();
$email = $_SESSION['email'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];
$errors = array();

if (strcmp($password, $repeatPassword) != 0){
    $errors[] = "Passwords don't match.";
    header('Location: account.php');
    $errored = 1;
 }

 if ($errored == 1){
    $_SESSION['passwordMismatch'] = $errors;
    header('Location: account.php');
    exit;
 }
$_SESSION['password'] = $password;

 $salt = "aocj;l!!!akjfp8pq8980q4p;hlafidhjspc8q923on_169";
 $saltPassword = hash("sha256", $salt."pepper123!#@$".$password);
 $dao->changePassword($email, $saltPassword);
 $_SESSION['changedPassword'] = array("Password successfully updated.");
 header('Location: account.php');
