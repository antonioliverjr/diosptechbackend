<?php

declare(strict_types=1);

$conexao = null;

try{
    $conexao = new PDO('pgsql:host=localhost;dbname=aulapdo','postgres', 'gaproject');
} catch(Exception $e) {
    echo $e->getMessage();
    die();
}

return $conexao;

?>