<?php

declare(strict_types=1);

$conexao = require 'connect.php';
$sql = 'update PRODUTOS set descricao = ?, valor = ? where id = ?';

$prepare = $conexao->prepare($sql);

$prepare->bindParam(1, $_POST['descricao']);
$prepare->bindParam(2, $_POST['valor']);
$prepare->bindParam(3, $_POST['id']);
$prepare->execute();

try{
    $prepare->rowCount();
} catch(Exception $e) {
    echo $e->getMessage();
    die();
}

echo 'Cadastro atualizado com sucesso!';