<?php

require 'produtos.php';

$produto = new Produto();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
</head>
<body>
    
    <p>CADASTRO PRODUTOS</p>

    <form action="./crud_procedural/insert.php" method="post">
        <p>Descrição Produto: <input type="text" name="descricao"></input></p>
        <p>Valor Produto: <input type="number" name="valor"></input></p>
        <p><input type="submit" value="Enviar Dados"/></p>
    </form>

    <?php
        $mensagem = '';
        echo 'LISTAGEM DE PRODUTOS<hr>';
        foreach ($produto->list() as $value){
            $mensagem.= '<div>';
            $mensagem.= '<table class="table">';
            $mensagem.='<thead>';
            $mensagem.='<tr>';
            $mensagem.='<th scope="col">Id</th>';
            $mensagem.='<th scope="col">Descrição</th>';
            $mensagem.='<th scope="col">Valor</th>';
            $mensagem.='<th scope="col">Data de Cadastro</th>';
            $mensagem.='</tr>';
            $mensagem.='</thead>';
            $mensagem.= '<tbody>';
            $mensagem.='<tr>';
            $mensagem.='<th scope="col">'.$value['id'].'</th>';
            $mensagem.='<td scope="col">'.$value['descricao'].'</td>';
            $mensagem.='<td scope="col">'.$value['valor'].'</td>';
            $mensagem.='<td scope="col">'.$value['data_cadastro'].'</td>';
            $mensagem.='<td scope="col">';
            $mensagem.='</td>';
            $mensagem.='</tr>';
            $mensagem.= '</tbody>';
            $mensagem.= '</table>';
            $mensagem.= '</div>';
        }
        echo $mensagem;
    ?>
</body>
</html>