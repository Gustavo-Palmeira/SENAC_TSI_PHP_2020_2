<?php

//Conecta o Banco

require_once 'config.php';

$db = mysqli_connect('localhost', 'root', '', 'bdphpteste');

try {
  $objBanco = new PDO(DSN, DB_USER, DB_PASS);
} catch (PDOException $objErro) {
  echo 'SGBD indisponível: ' . $objErro->getMessage();
  exit();
}
