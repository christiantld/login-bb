<?php
session_start();
include_once('../includes/connectdb.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
  header('Location: ../views/index.php');
  exit();
}

$email = mysqli_real_escape_string($link, $_POST['email']);
$senha = mysqli_real_escape_string($link, $_POST['senha']);


$query = "SELECT pk_funcionario, email FROM tb_funcionario WHERE email = '$email' and senha = md5('$senha')";

$result = mysqli_query($link, $query);

$row = mysqli_num_rows($result);
if ($row == 1) {
  $_SESSION['email'] = $email;
  header('Location: ../views/profile.php');
  exit();
} else {
  $_SESSION['nao_autenticado'] = true;
  header('Location: ../views/index.php');
  exit();
}
mysqli_close($link);