<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

session_start();

require_once "dbsql.php";

// EXEMPLO SENHA
//$pass = password_hash('admin', PASSWORD_DEFAULT);
//$db->query("INSERT INTO userLogin (userName, userEmail, userPassword) VALUES ('Gustavo', 'gustavo@senac.com.br', '$pass')");

if (isset($_SESSION['login'])) {

  include 'header_tpl.php';
  include 'index_menu_tpl.php';
  include 'footer_tpl.php';
} else if (isset($_POST['entrar'])) {

  $login = filter_var($_POST['login'], FILTER_SANITIZE_EMAIL);
  $senha = $_POST['senha'];

  // Verificar se existe usuário

  $consultaBanco = $db->query("SELECT userPassword FROM userLogin WHERE userEmail = '$login' ");
  $registro = $consultaBanco->fetch(PDO::FETCH_ASSOC);
  $hash = $registro['userPassword'];

  // Comparar
  if (password_verify($senha, $hash)) {

    $_SESSION['login'] = $login;
    include 'header_tpl.php';
    include 'index_menu_tpl.php';
    include 'footer_tpl.php';
  } else {

    $msg = "Login e/ou senha incorreta";
    include 'index_tpl.php';
  }

  echo "<a href='index.php'> Sair </a>";
} else {

  include 'index_tpl.php';
}
