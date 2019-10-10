<?php

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'db_crudpi');

$link = mysqli_connect(HOST, USER, PASSWORD, DB);
if (mysqli_connect_errno()) {
  // mysqli_connect_error - devolve a mensagem de erro
  printf("Erro ao conectar ao banco de dados: %s<br> ", mysqli_connect_error());
  exit();
}