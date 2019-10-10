<?php
include_once('verify_login.php');
include_once('connectdb.php');
$email = $_SESSION['email'];
$query = "SELECT pk_funcionario, no_funcionario,nu_cpf, nu_telefone, email, senha FROM tb_funcionario WHERE email = '$email'";

if ($result = mysqli_query($link, $query)) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["pk_funcionario"];
    $nome = $row["no_funcionario"];
    $cpf = $row["nu_cpf"];
    $telefone = $row["nu_telefone"];
    $email = $row["email"];
    $senha = $row["senha"];
  }
} else {
  echo 'Erro';
}
mysqli_close($link);