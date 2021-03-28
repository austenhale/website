<?php
  session_start();
  require_once 'Dao.php';
  $dao = new Dao();
  $dao->deleteComment($_GET['id'], $_SESSION['comment_table']);

  header("Location: ". $_SESSION['current_page']);
  exit;