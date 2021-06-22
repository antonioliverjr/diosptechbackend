<?php

function validaNome(string $nome) : bool{
    if(empty($nome)){
        $_SESSION['erro'] = "Nome não pode estar em branco!";
        /*header('location: index.php');*/
        return false;
    }elseif(strlen($nome) > 50){
        $_SESSION['erro'] = "Nome contém limite de 50 caracteres!";
        /*header('location: index.php');*/
        return false;
    }elseif(strlen($nome) <= 3){
        $_SESSION['erro'] = "Nome deve conter mais de 3 caracteres!";
        /*header('location: index.php');*/
        return false;
    }
    return true;
}

function validaIdade(string $idade){
    if(empty($idade)){
        $_SESSION['erro'] = "Idade precisa conter valor!";
        /*header('location: index.php');*/
        return;
    }elseif(!is_numeric($idade)){
        $_SESSION['erro'] = "Idade tem que ser números!";
        header('location: index.php');
        return;
    }
}

