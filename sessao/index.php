<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

session_start();

$credenciais = [
  0 => ['login' => 'gustavo@senac.br', 'pass' => '123456'],
  1 => ['login' => 'gabriel@senac.br', 'pass' => '123456'],
  2 => ['login' => 'rose@senac.br', 'pass' => '123456']
];

if (isset($_SESSION['login'])) {

  include 'header_tpl.php';
  include 'index_menu_tpl.php';
  include 'footer_tpl.php';

} else if (isset($_POST['entrar'])) {

  $login = $_POST['login'];
  $senha = $_POST['senha'];

  if (in_array(['login' => $login, 'pass' => $senha], $credenciais)) {

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
