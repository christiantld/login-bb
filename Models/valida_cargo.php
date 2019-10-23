<?php
include_once '../includes/connectdb.php';
$no_cargo = $_POST['cargo'];
$query = "SELECT pk_cargo FROM tb_cargo WHERE no_cargo = '$no_cargo'";
if ($result = mysqli_query($link, $query)) {
  while ($row = mysqli_fetch_assoc($result)) {
    $pk_cargo = $row['pk_cargo'];
    echo $pk_cargo;
  }
} else {
  echo 'erro';
}