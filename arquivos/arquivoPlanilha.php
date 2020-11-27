<?php

require_once "dbsql.php";

$filePlanilha = fopen('CIDADES_CAPITAIS_IBGE.csv', 'r');
$count = 0; //Contador para não imprimir a primiera linha (Identificação das colunas)

while ($flinha = fgets($filePlanilha)) {

  $count += 1;
  $dados = explode(';', $flinha);

  if ($count != 1) {
    $id_cidade = $dados[0];
    $nome = $dados[1];
    $nomeabrev = $dados[2];
    $latitude = $dados[3];
    $longitude = $dados[4];
  }

  $stmt = $db->prepare("INSERT INTO planilhaCidades 
                              (id_cidade, nome, nomeabrev, latitude, longitude)
                        VALUES 
                              (:id_cidade, :nome, :nomeabrev, :latitude, :longitude)");

  $stmt->bindParam(':id_cidade', $id_cidade);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':nomeabrev', $nomeabrev);
  $stmt->bindParam(':latitude', $latitude);
  $stmt->bindParam(':longitude', $longitude);

  $stmt->execute();
}

fclose($filePlanilha);
