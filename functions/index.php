<?php

// Função com assinatura 
function operacao(float $num1, float $num2, string $operacao = '+'): float
{
  switch ($operacao) {
    case '+':
      return $num1 + $num2;
    case '-':
      return $num1 - $num2;
    case '/':
      return $num1 / $num2;
    case '*':
      return $num1 * $num2;
    default:
      return 0.0;
  }
}
echo operacao(7.5, 5.2, '*');
/*
function diaSemana(int $dia): string
{
  switch ($dia) {
    case 0:
      return "Domingo";
    case 1:
      return "Segunda";
    case 2:
      return "Terça";
    case 3:
      return "Quarta";
    case 4:
      return "Quinta";
    case 5:
      return "Sexta";
    case 6:
      return "Sábado";
    default:
      return "Digite um número entre 0 e 6";
  }
}
echo "<br>" . diaSemana(4);
*/
function diaSemana(int $dia): string
{
  $semana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
  return $semana[$dia] ?? 'Digite um número entre 0 e 6';
}
echo "<br><br>" . diaSemana(0);
