<?php //exclusao.php
    // efetua a exclusão do id informado.
    $id = $_GET["id"];
    echo $id;
    include_once "connectdb.php";
    $query = "DELETE FROM tb_funcionario where pk_funcionario=$id;";
    if ($result = mysqli_query($link, $query)) {
      //  echo $result;
      echo "<h3>Exclusão efetuada com sucesso</h3>";
      session_destroy();
      header('Location: ../Views/index.php');
      exit();
    }
    // fecha a conexão
    mysqli_close($link);
    ?>