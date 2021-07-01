<?php

declare(strict_types=1);

$conexao = require 'connect.php';
$sql = 'delete from PRODUTOS where id = ?';

$prepare = $conexao->prepare($sql);

$prepare->bindParam(1, $_POST['id']);
$prepare->execute();

try{
    $prepare->rowCount();
} catch(Exception $e) {
    echo $e->getMessage();
    die();
}

echo 'Cadastro deletado com sucesso!';