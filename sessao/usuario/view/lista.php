<?php

include '../header_tpl.php';
include '../index_menu_tpl.php';

echo '	<br><br>
		<center>';

if (isset($erro)) {

        echo "<font color='red'>$erro</font><br><br>";
}

echo '	<table border="1" width="50%">
			<tr>
				<td>ID</td><td>Nome</td><td>E-mail</td><td></td><td></td>
			</tr>';

foreach ($lista as $usuario) {
        echo "<tr>
          <td>{$usuario['userId']}</td>
          <td>{$usuario['userName']}</td>
          <td>{$usuario['userEmail']}</td>
          <td><a href='?apagar={$usuario['userId']}'>Apagar</a></td>
          <td><a href='?editar={$usuario['userId']}'>Editar</a></td>
        </tr>";
}

echo '  </center>
        </table>';

include '../footer_tpl.php';
