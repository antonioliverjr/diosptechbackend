<?php

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
    <p>FORMULÁRIO PRODUTOS</p>

    <form action="insert.php" method="post">
        <p>Descrição Produto: <input type="text" name="descricao"></input></p>
        <p>Valor Produto: <input type="number" name="valor"></input></p>
        <p><input type="submit" value="Enviar Dados"/></p>
    </form>

    <?php
        /*foreach ($conexao->query($sql) as $key -> $value){
            echo 'Id: '.$value['id'].'<br>Descrição: '.$value['descricao'].'<hr>';
        }*/
    ?>
</body>
</html>