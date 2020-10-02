<?php

require_once 'db.php';

include 'busca_contato_tpl.php';

if ( isset($_POST['buscar']) ) {
  $objStmt = $objBanco->prepare('SELECT id, nome, whatsapp FROM contatos WHERE nome LIKE :bsc');

  $argumento = '%' . $_POST['buscar'] . '%';

  $objStmt->bindParam(':bsc', $argumento);

  $objStmt->execute();

  while ($reg = $objStmt->fetch(PDO::FETCH_ASSOC)) {
    $tabela[$reg['id']] = $reg;
  }

  $tabela = $tabela ?? array();

  include 'busca_contato_resultado_tpl.php';

}
