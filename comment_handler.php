<?php
  session_start();

  require_once 'KLogger.php';
  $logger = new KLogger ( "log.txt" , KLogger::WARN );
  $errors = array();

$_SESSION['class'] = "positive_vibes";
$_SESSION['comments'] = array("Comment posted.");
$_SESSION['form_data'] = array();

$table = isset($_SESSION['comment_table']) ? $_SESSION['comment_table']: '';


  require_once 'Dao.php';
  $dao = new Dao();
  $dao->insertComment(isset($_SESSION['email']) ? $_SESSION['email'] : "Anonymous", $_POST['comment'], $table);

  header("Location: ". $_SESSION['current_page']);
  exit;