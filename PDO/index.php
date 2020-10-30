<?php

require_once "bd.php";

// SELECT
$sql = 'SELECT nome, telefone FROM cliente';

$consultaBanco = $db->query($sql);

// QUERY
foreach ($consultaBanco as $registro) {
  echo "Nome: {$registro['nome']}|| Telefone: {$registro['telefone']}";
  echo "<a href=''> Apagar </a> <br>";
}

/*
while ($registro = $consultaBanco->fetch(PDO::FETCH_ASSOC)) {

  echo "Sr. {$registro['nome']}, telefone {$registro['telefone']}. <br>";
}
*/

// DELETE
$db->query("DELETE FROM cliente WHERE id = 2");

foreach ($consultaBanco as $registro) {
  echo "Nome: {$registro['nome']}|| Telefone: {$registro['telefone']}";
  echo "<a href=''> Apagar </a> <br>";
}


// UPDATE
$db->query("UPDATE cliente SET nome = 'Gabriel' WHERE id = 1");

foreach ($consultaBanco as $registro) {
  echo "Nome: {$registro['nome']}|| Telefone: {$registro['telefone']}";
  echo "<a href=''> Apagar </a> <br>";
}

// INSERT
$db->query("INSERT INTO cliente (nome, telefone, id) VALUES ('ANSJNSI', '54545454', '2')");

foreach ($consultaBanco as $registro) {
  echo "Nome: {$registro['nome']}|| Telefone: {$registro['telefone']}";
  echo "<a href=''> Apagar </a> <br>";
}
