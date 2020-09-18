<?php

require_once 'db.php';

//prerpara a consulta
$objStmt = $objBanco->prepare('INSERT INTO contatos (nome, whatsapp) VALUES ( :nome , :whatsapp )');

//substitui os dados
$objStmt->bindParam(':nome', $_POST['nm']);
$objStmt->bindParam(':whatsapp', $_POST['whats']);

//executa
if ($objStmt->execute()) {
  $msg = 'Obrigado por se cadastrar';
} else {
  $msg = 'ERRO';
};
//Chama o template 
include 'grava_contato_tpl.php';
