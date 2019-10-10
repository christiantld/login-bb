<?php
include_once 'connectdb.php';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "INSERT INTO tb_funcionario (no_funcionario, nu_cpf, nu_telefone, email, senha) VALUES ('$nome', $cpf, $telefone, '$email', md5('$senha'));";
if ($result = mysqli_query($link, $query)) {
  echo "<h3>Cadastro efetuado com sucesso</h3>";
  header('Location: ../views/index.php');
  exit();
} else {
  echo "<h3>Error</h3>";
  echo '<a href="register.php" class="">Tentar Novamente</a>';
}
mysqli_close($link);
?>
<br>
<a class='btn waves-effect waves-light' href="../views/index.php">Fazer Login</a>
</div>