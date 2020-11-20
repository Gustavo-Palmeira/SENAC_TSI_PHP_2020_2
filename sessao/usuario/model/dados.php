<?php

chdir(__DIR__);

require_once "../../dbsql.php";

function listar(int $id = null): array
{

  global $db;

  if (is_null($id)) {
    $str = '';
  } else {
    $str = 'WHERE userId = ' . preg_replace('/\D/', '', $id);
  }

  $consulta = $db->query("SELECT userId, userName, userEmail FROM userLogin $str");
  $registro = $consulta->fetchAll();

  return is_array($registro) ? $registro : [];
}

function ja_existe_email(string $email): bool
{
  if (empty($email)) {
    return false;
  }

  global $db;

  $stmt = $db->prepare('SELECT userId FROM userLogin WHERE userEmail = :email');

  $stmt->bindParam(':email', $email);

  $stmt->execute();

  $registro = $stmt->fetch();

  if (is_array($registro)) {
    return true;
  } else {
    return false;
  }
}

function gravar_usuario(string $nome, string $email, string $senha): ?int
{
  global $db;

  $senha = password_hash($senha, PASSWORD_DEFAULT);

  $stmt = $db->prepare('	INSERT INTO userLogin 
								( userName, userEmail, userPassword ) 
							VALUES 
								( :nome, :email, :senha)');

  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':senha', $senha);

  $stmt->execute();

  return $db->lastInsertId();
}

function apagar_usuario(int $id): bool
{
  if (is_numeric($id)) {

    global $db;

    if ($db->exec("DELETE FROM userLogin WHERE userId = $id") > 0) {

      return true;
    } else {

      return false;
    }
  } else {

    return false;
  }
}

function editar_usuario(int $id, string $nome, string $email, string $senha): bool
{
  global $db;

  $senha = password_hash($senha, PASSWORD_DEFAULT);

  $stmt = $db->prepare('	UPDATE userLogin 
                          SET userName = :nome, userEmail = :email, userPassword = :senha
                          WHERE userId = :id');

  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':senha', $senha);

  return $stmt->execute();
}

/*
function vincula_imagem_ao_usuario( int $id, string $nome_imagem ): bool
{
global $db;

$stmt = $db -> prepare("UPDATE userLogin SET foto = :foto WHERE id = :id");

$stmt -> bindParam(':foto', $nome_imagem);
$stmt -> bindParam 

}