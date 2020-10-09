<?php

//controle de cookie
session_start();

echo 'Seu ID de sessão é: ' . session_id();
echo '<br><br>';

$_SESSION['user'] = 'Gustavo';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <title>NPS - FORM</title>
</head>

<body>
  <h1 class="text-center"> Nível de satisfação </h1>
  <form method="post" action="formulario.php" class="text-center">
    <p> Em uma escala de 0 a 10, quanto você inidicaria a nossa empresa? </p>
    <input type="radio" name="nota" id="destratorid" value="0-6">
    <label for="0-6">0 - 6</label><br>
    <input type="radio" name="nota" id="passivoid" value="7-8">
    <label for="7-8">7 - 8</label><br>
    <input type="radio" name="nota" id="promotorid" value="9-10">
    <label for="9-10"> 9 - 10</label><br>
    <p class="mt-2"> Porque escolheu essa nota? </p>
    <textarea name="comentario" rows="5" cols="40"></textarea><br><br>
    <input type="submit" name="avaliacao" value="Enviar">
  </form>

</body>

</html>