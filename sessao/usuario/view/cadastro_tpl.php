<html>

<head>
  <title>Meu site</title>
</head>

<body>
  <br><br>
  <h1>
    <center>Crie sua conta</center>
  </h1><br><br>
  <center>
    <table border="1">
      <tr>
        <td>
          <form method="post" action="cadastro.php">
            <br>
            <?php
            if (count($erros) > 0) {

              foreach ($erros as $erro) {
                echo $erro . '<br>';
              }
            }
            ?>
            <br><br>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            <br><br>
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" required>
            <br><br>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>
            <br><br>
            <label for="conf_senha">Confirme a senha</label>
            <input type="password" id="conf_senha" name="conf_senha" required>
            <br>
            <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
          </form>
        </td>
      </tr>
    </table>
  </center>
</body>

</html>