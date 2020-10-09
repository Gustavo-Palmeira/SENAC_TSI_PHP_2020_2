<?php

//controle de cookie
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db.php';

$nota = $_POST['nota'];
$comentario = $_POST['comentario'];

//Cria tabela
$query = mysqli_query(
  $db,
  'CREATE TABLE IF NOT EXISTS avalicoes (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                                        nota BIGINT,
                                        comentario VARCHAR(255) NOT NULL)'
);

//prerpara a consulta
$objStmt = $objBanco->prepare('INSERT INTO avalicoes (nota, comentario) VALUES ( :nt , :coment )');

//substitui os dados
$objStmt->bindParam(':nt', $nota);
$objStmt->bindParam(':coment', $comentario);

//executa
if ($objStmt->execute()) {
  echo 'Pesquisa gravada!';
} else {
  echo 'ERRO';
};


echo "<br><br><a href='./agradecimento.php?nota=$nota'> Seguir </a>";
