<?php

ini_set('display_error', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');

$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terça';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sábado';

$hoje = date('w');

echo "Hoje é " . $semana[$hoje] . "<br>";

// Depuração de código 
// var_dump($semana);

unset($semana);

$semana['Sunday '] = 0;
$semana['Monday'] = 1;
$semana['Tuesday'] = 2;
$semana['Wednesday'] = 3;
$semana['Thursday'] = 4;
$semana['Friday'] = 5;
$semana['Saturday'] = 6;

$hoje = date('l');

echo "<br> Hoje é " . $semana[$hoje] . "<br><br>";

$professores = [
  0 => [
    'nome'   =>   'Luiz Bono',
    'idade'  =>  25,
    'peso'  =>  67.8,
    'signo'  =>  'aquariano'
  ],
  1 => [
    'nome'   =>   'Thiago Claro',
    'idade'  =>  27,
    'peso'  =>  70.7,
    'signo'  =>  'geminiano'
  ],
  2 => [
    'nome'   =>   'Thiago Quintas',
    'idade'  =>  21,
    'peso'  =>  62.4,
    'signo'  =>  'leonino'
  ]
];
?>

<table border="1">
  <tr>
    <td>ID</td>
    <td>NOME</td>
    <td>IDADE</td>
    <td>PESO</td>
    <td>SIGNO</td>
  </tr>

  <?php

  foreach ($professores as $linha => $professor) {
    echo "<tr> <td>$linha</td> 
            <td>{$professor['nome']}</td>
            <td>{$professor['idade']}</td>
            <td>{$professor['peso']}</td>
            <td>{$professor['signo']}</td>
        </tr>";
  }

  ?>

</table>

<?php
//Vetor dentro de uma string especial 
echo "<br> O professor {$professores['0']['nome']} tem {$professores['0']['idade']} anos, pesa " . number_format($professores['0']['peso'], 2, ',', '.') . " Kg e é {$professores['0']['signo']}<br>";


//Constante 
define('MUNDO', 'Gustavo Palmeira');

echo '<br> Olá ' . MUNDO;

//Planilha 
