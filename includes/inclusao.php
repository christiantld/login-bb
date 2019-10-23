<?php
include_once 'connectdb.php';
//include_once '../Models/valida_cargo.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$fk_cargo = $_POST['cargo'];

// Se nenhum cargo for informado retorna ao registro
if ($no_cargo == "") {
  $_SESSION['nao_cadastrado'] = true;
  header('Location: ../Views/register.php');
  exit();
}

$query = "INSERT INTO tb_funcionario (no_funcionario, nu_cpf, telefone, email, senha, fk_cargo) VALUES ('$nome', $cpf, $telefone, '$email', md5('$senha'), $fk_cargo);";
if ($result = mysqli_query($link, $query)) {
  echo "<h3>Cadastro efetuado com sucesso</h3>";
  header('Location: ../Views/index.php');
  exit();
} else {
  header('Location: ../Views/register.php');
  exit();
}

mysqli_close($link);