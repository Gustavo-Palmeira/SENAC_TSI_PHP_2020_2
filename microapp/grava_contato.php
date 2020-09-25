<?php

require_once 'db.php';

//Como evitar SQL injection

//Preparo a consulta

$objStmt = $objBanco->prepare('	INSERT INTO contatos 
									( nome, whatsapp)
								VALUES 
									( :nm, :wzap)');


//Substitui :nm e :wzap pelo valor enviado pelo usuário

$objStmt->bindParam(':nm', $_POST['nm']);					
$objStmt->bindParam(':wzap', $_POST['whats']);	

//Executo

if ( $objStmt->execute() ) {

	$msg = 'Contato gravado com sucesso!';

} else {

	$msg = ' ERRO';
}

//Chama o template (front-end)
include 'grava_contato_tpl.php';
include 'lista_contato.php';