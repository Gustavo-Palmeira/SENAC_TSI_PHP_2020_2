<?php

require 'model/dados.php';

if (isset($_POST['cadastrar'])) {

    /* echo '<pre>';
  var_dump( $_FILES );  // Constante global para imagens 
  echo '</pre>' */;

  $dir_imagens = '../view/imagens/';

  if (!is_dir('../view/imagens/')) {

    mkdir('../view/imagens/');
  }


  if (empty($erros)) {

    require 'controller/consist_cadastro.php';

    $id = gravar_usuario($_POST['nome'], $_POST['email'], $_POST['senha']);

    if ($id) {

      if (isset($_FILES['foto'])) {

        // $isImage = getimagesize($_FILES['foto']['tmp_name']); // Sql injection

        if ($_FILES['foto']['error'] == 0) { // Verifica erros

          echo "deu certo";

          $nome_explodido = explode('.', $_FILES['foto']['name']);
          $ext = end($nome_explodido);

          $arquivo_temp = $_FILES['foto']['tmp_name'];
          $destino = $dir_imagens . 'avatar' . $id . '.' . $ext;

          move_uploaded_file($arquivo_temp, $destino);

          //vincula_imagem_ao_usuario()

        }
      }

      session_start();

      $_SESSION['login'] = $_POST['email'];

      header('Location: ../');
    } else {

      $erros = ['Não foi possível criar o usuário'];
    }
  }
} else {

  $erros = [];
}

include 'view/cadastro_tpl.php';
