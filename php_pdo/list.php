<?php

declare(strict_types=1);

$conexao = require 'connect.php';
$sql = 'SELECT * FROM produtos';

echo '<h3>Produtos Cadastrados:</h3>';

foreach ($conexao->query($sql) as $value){
    echo 'Id: '.$value['id'].'<br>Descrição: '.$value['descricao'].'<br>Valor: '.$value['valor'].'<br>Data de Cadastro: '.$value['data_cadastro'].'<hr>';
}