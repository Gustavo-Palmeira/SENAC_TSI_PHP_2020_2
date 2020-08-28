<?php
date_default_timezone_set('America/Sao_Paulo');
// For
for ($i = 1, $j = 5; $i <= 5; $i++, $j--) {
  echo "Linha: $i $j <br>";
}
echo '<br><br>';

// While
$i = 1;
$j = 5;
while ($i <= 5) {
  echo "Linha: $i $j <br>";
  $i++;
  $j--;
}
echo '<br><br>';

// do while
$i = 1;
$j = 5;
do {
  echo "Linha: $i $j <br>";
  $i++;
  $j--;
} while ($i <= 5);
echo '<br><br>';

$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terça';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sábado';

$hoje = date('w');

echo "Hoje é " . $semana[$hoje];