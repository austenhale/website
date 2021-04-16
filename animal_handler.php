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
$newAnimal = $_POST['favoriteAnimal'];
$email = $_SESSION['email'];
require_once 'Dao.php';
$dao = new Dao();
$dao->changeAnimal($email, $newAnimal);
$_SESSION['changedAnimal'] = array("Animal updated.");
header('Location: account.php');
exit;