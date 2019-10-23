<?php
// efetua alteração do curso informado em form_alteracao.php
$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$fk_cargo = $_POST['cargo'];

include_once "connectdb.php";
$query = "UPDATE tb_funcionario
        SET  no_funcionario = '$nome', nu_cpf = $cpf, telefone = $telefone, email = '$email', fk_cargo = $fk_cargo
      WHERE pk_funcionario= $id;";
// echo $query.'<br>';
if ($result = mysqli_query($link, $query)) {
  echo "<h3>Alteração efetuada com sucesso</h3> ";
  header('Location: ../Views/profile.php');
  exit();
} else {
  echo mysqli_error($link);
}
// fecha a conexão
mysqli_close($link);