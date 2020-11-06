<?php 

include '../header_tpl.php';
include '../index_menu_tpl.php';

echo '  <center><br><br>
        <table border="1">
        <tr>
          <td>ID</td><td>Nome</td><td>E-mail</td>
        </tr>';

foreach ($lista as $usuario) {
  echo "<tr>
          <td>{$usuario['userId']}</td><td>{$usuario['userName']}</td><td>{$usuario['userEmail']}</td>
        </tr>";
}

echo '  </center>
        </table>';

include '../footer_tpl.php';