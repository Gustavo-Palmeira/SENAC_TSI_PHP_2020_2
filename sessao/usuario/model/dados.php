<?php

chdir(__DIR__);

require_once "../../dbsql.php";

function listar(): array
{

  global $db;

  $consulta = $db->query('SELECT userId, userName, userEmail FROM userLogin');
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

  return is_numeric($registro['userId']) ? true : false;
}
