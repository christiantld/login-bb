<?php
session_start();

if (!$_SESSION['email']) {
  header('Location: ../Views/index.php');
  exit();
}