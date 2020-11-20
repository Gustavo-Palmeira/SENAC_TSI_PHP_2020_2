<?php

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$conf_senha = $_POST['conf_senha'] ?? null;
$foto = $_POST['foto'] ?? null;

// Evita espaço antes ou depois da senha
$senha = trim($senha);

// E-mail sempre minúsculo
//$email = strToLower($email);

$erros = [];

// Verifica se o nome tem mais que dois ou caracteres
if (strlen($nome) < 2) {
  $erros[] = "O nome deve contém pelo menos 2 caracteres";
}

// Verifica se o e-mail é válido
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $erros[] = 'E-mail inválido';
} elseif (ja_existe_email($email) && !isset($_POST['gravar'])) {
  $erros[] = 'E-mail já cadastrado';
}

// Verifica se o nome tem mais que dois ou caracteres
if (strlen($senha) < 8) {
  $erros[] = "A senha deve contém pelo menos 8 caracteres";
} else if ($senha != $conf_senha) {
  $erros[] = "As senhas não são iguais";
}
