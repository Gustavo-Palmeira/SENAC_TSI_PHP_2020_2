<?php

$clima = 'quente';

if ($clima == 'gelado') {
  echo "Meu pé congela! . <br><br>";
}
$bool = '1';

$var = $bool === true ? '$bool é igual a true' : '$bool é diferente de true';

echo $var . "<br><br>";

$var = $bool == true ? '$bool é igual a true' : '$bool é diferente de true';

echo $var . "<br><br>";

$var = $bool != true ? '$bool é diferente de true' : '$bool é igual a true';

echo $var . "<br><br>";

$var = $bool !== true ? '$bool é diferente de true' : '$bool é igual a true';

echo $var . "<br><br>";

$frase = "Meu pai tinha um cachorro amarelo e rosa";

if (strpos($frase, 'Meu pai') !== false) {
  echo "Encontrei meu pai" . "<br><br>";
} else {
  echo "Não encontrei meu pai" . "<br><br>";
}

//Switch

switch ($clima) {
  case 'quente':
  case 'tropical':
    echo 'Adoro clima quente';

    if (true) {
      echo '<br> -- if dentro do switch';
      if (true) {
        echo '<br> -- if aninhado dentro do switch';
      }
    }
    break;
  case 'morno':
    echo 'Morno é melhor que frio';
    break;
  case 'frio':
    echo 'Eu adoro quando está longe';
    break;
  case 'gelado':
    echo 'Canadá';
    break;
  default:
    echo 'Clima desconhecido';
    break;
}
$isso = 'véi';
//Condicional nova no PHP
$isso = $isso ?? null;

echo "<br><br> Olha só $isso";
