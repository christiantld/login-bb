<?php
include_once('verify_login.php');
include_once('connectdb.php');
$email = $_SESSION['email'];
$query = "SELECT pk_funcionario, no_funcionario,nu_cpf, telefone, email, senha, fk_cargo FROM tb_funcionario WHERE email = '$email'";

if ($result = mysqli_query($link, $query)) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["pk_funcionario"];
    $nome = $row["no_funcionario"];
    $cpf = $row["nu_cpf"];
    $telefone = $row["telefone"];
    $email = $row["email"];
    $senha = $row["senha"];
    $fk_cargo = $row['fk_cargo'];
  }
} else {
  echo 'Erro';
}

$query = "SELECT no_cargo FROM tb_cargo c, tb_funcionario f WHERE c.pk_cargo = $fk_cargo";

if ($result = mysqli_query($link, $query)) {
  while ($row = mysqli_fetch_assoc($result)) {
    $no_cargo = $row["no_cargo"];
  }
} else {
  echo 'Erro';
}
mysqli_close($link);