<?php
    include "servicos/servicoMensagemSession.php";
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
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
        <p>
        <?php 
            $mensagemDeSucesso = obterMensagemSucesso();
            /*$mensagemDeSucesso = isset($_SESSION['sucesso']) ? $_SESSION['sucesso'] : "";*/
            if(!empty($mensagemDeSucesso)){
                echo $mensagemDeSucesso;
            }
        ?>
        </p>      
        <p>Seu Nome: <input type="text" name="nome"></input></p>
        <p>Sua Idade: <input type="text" name="idade"></input></p>
        <p><input type="submit" value="Enviar dados competidor"/></p>
    </form>

    <?php
        $mensagemDeErro = obterMensagemErro();
        /*$mensagemDeErro = isset($_SESSION['erro']) ? $_SESSION['erro'] : "";*/
        if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }
    ?>
</body>
</html>