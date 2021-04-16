<?php
  session_start();
  header("Location: ". $_SESSION['last_page']);
  exit;