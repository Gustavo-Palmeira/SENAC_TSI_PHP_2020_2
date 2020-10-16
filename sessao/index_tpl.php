<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <center>
    <table border="1">
      <tr>
        <td>
          <form method="post">
            <br>
            <label for="login"> Login </label>
            <input type="text" id="login" name="login">
            <br><br>
            <label for="login"> Senha </label>
            <input type="text" id="login" name="senha">
            <br><br>
            <input type="submit" name="entrar" value="Entrar">
          </form>
        </td>
      </tr>
    </table>
    <?php
    if (isset($msg)) {
      echo $msg;
    }
    ?>
  </center>
</body>

</html>