<?php

// EXEMPLO
/*
$fp = fopen('planilha.csv', 'w');

fwrite($fp, "Nome;Telefone\r\n");
fwrite($fp, "Gustavo;1198569856\r\n");

fclose($fp);

echo "Arquivo gerado";

$fp = fopen('planilha.csv', 'a');

fwrite($fp, "Gabriel;1199997777\r\n");

fclose($fp);

echo "Arquivo alterado";

echo "Conteúdo do arquivo";

$fp = fopen('planilha.csv', 'r');

while ( $flinha = fgets($fp)) {
  echo $flinha . '<br>';
}

fclose($fp);
*/
