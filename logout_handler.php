<?php
  session_start();
  session_destroy();
  header("Location: ". $_SESSION['current_page']);
  exit;