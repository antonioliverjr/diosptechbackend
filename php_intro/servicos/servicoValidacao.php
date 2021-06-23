<?php


function validaNome(string $nome) : bool
{
    if(empty($nome)){
        setarMensagemErro('Nome não pode estar em branco!');
        /*$_SESSION['erro'] = "Nome não pode estar em branco!";
        header('location: index.php');*/
        return false;
    }elseif(strlen($nome) > 50){
        setarMensagemErro("Nome contém limite de 50 caracteres!");
        /*$_SESSION['erro'] = "Nome contém limite de 50 caracteres!";
        header('location: index.php');*/
        return false;
    }elseif(strlen($nome) <= 3){
        setarMensagemErro("Nome deve conter mais de 3 caracteres!");
        /*$_SESSION['erro'] = "Nome deve conter mais de 3 caracteres!";
        header('location: index.php');*/
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(empty($idade)){
        setarMensagemErro("Idade precisa conter valor!");
        /*$_SESSION['erro'] = "Idade precisa conter valor!";
        header('location: index.php');*/
        return false;
    }elseif(!is_numeric($idade)){
        setarMensagemErro("Idade tem que ser números!");
        /*$_SESSION['erro'] = "Idade tem que ser números!";
        header('location: index.php');*/
        return false;
    }
    return true;
}

