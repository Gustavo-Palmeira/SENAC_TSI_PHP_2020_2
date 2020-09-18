<?php

require_once 'config.php';

$objBanco = new PDO(DSN, DB_USER, DB_PASS);

$consulta = $objBanco->query('SELECT id, nome, whatsapp FROM contatos', PDO::FETCH_ASSOC);

//var_dump($objBanco->errorInfo()); DEBUG!!

// DELETAR
$deleta = $objBanco->query('DELETE FROM contatos WHERE id= 9');

//INSERIR
$inserir = $objBanco->query("INSERT INTO contatos (nome, whatsapp) VALUES ('{$_POST['nm']}' , '{$_POST['whats']}')");

//UPDATE
$update = $objBanco->query("UPDATE contatos SET nome='Marco' WHERE id= 3");

foreach ($consulta as $registro) {
  echo "ID: {$registro['id']}, NOME: {$registro['nome']}, WHATSAPP: {$registro['whatsapp']} <br>";
};
