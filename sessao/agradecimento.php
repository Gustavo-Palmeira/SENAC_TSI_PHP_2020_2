<?php

//controle de cookie
session_start();

require_once 'db.php';

// $nota = $_REQUEST['nota']; PEGA GET E POST

$nota = $_GET['nota'];

echo "A sua nota foi: $nota";

if ($nota == '9-10') {
  echo '<br><br>Obrigado pela avaliação!!';
} else {
  echo '<br><br>O que poderiamos fazer para você nos dar uma nota melhor?';
}

echo "<br><br>Usuário: " . $_SESSION['user'];