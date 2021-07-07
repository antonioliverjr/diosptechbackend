<?php

declare(strict_types=1);

$conexao = require 'connect.php';
$sql = 'insert into PRODUTOS(descricao, valor) values(?, ?)';

$prepare = $conexao->prepare($sql);

$prepare->bindParam(1, $_POST['descricao']);
$prepare->bindParam(2, $_POST['valor']);
$prepare->execute();

try{
    $prepare->rowCount();
} catch(Exception $e) {
    echo $e->getMessage();
    die();
}

echo 'Cadastro realidado com sucesso!';

