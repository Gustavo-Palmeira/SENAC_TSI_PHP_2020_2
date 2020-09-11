<?php

// Conectar no SGBD
$db = mysqli_connect('localhost', 'root', '', 'bdphp');

// Testar conexão
// echo '<pre>';
// var_dump($db);

// Criar uma tabela 
$query = mysqli_query(
  $db,
  'CREATE TABLE IF NOT EXISTS contatos (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                         nome VARCHAR(255) NOT NULL,
                         whatsapp BIGINT)'
);

if ($query) {
  echo 'Criada com sucesso';
} else {
  echo 'ERRO: ';
}

// Insere dados no banco 
$contato = ['nome' => 'Gustavo Palmeira', 'whatsapp' => '5511974284317'];

mysqli_query(
  $db,
  "INSERT INTO contatos 
    (nome, whatsapp) 
  VALUES 
    ('{$contato['nome']}', '{$contato['whatsapp']}')"
);

// Lista os dados da tabela
$query = mysqli_query(
  $db,
  ' SELECT 
      id, nome, whatsapp
    FROM
      contatos'
);

echo '<br><br><table border="1px">';
echo "<tr><td>ID</td><td>NOME</td><td>WHATSAPP</td></tr>";
while ($registro = $query->fetch_assoc()) {
  echo "<tr>
          <td>{$registro['id']}</td>
          <td>{$registro['nome']}</td>
          <td>{$registro['whatsapp']}</td>
        </tr>";
};
echo "</table>";

// Apaga oque está na tabela 
// mysqli_query($db, 'DELETE FROM contatos');

// Reseta o ID, autoincremento
// mysqli_query($db, 'ALTER TABLE contatos AUTO_INCREMENT = 1');

//$_POST $_GET $_REQUEST - Vetores super globais para recebermos dados do usuário

echo "<br><br>Nome enviado: {$_POST['nm']}, whatsapp: {$_POST['whats']}";
