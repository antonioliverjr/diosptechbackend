<?php

session_name('sucesso');
session_start();

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['erro'] = "Nome não pode estar em branco!";
    header('location: index.php');
    return;
}elseif(strlen($nome) > 50){
    $_SESSION['erro'] = "Nome contém limite de 50 caracteres!";
    header('location: index.php');
    return;
}elseif(strlen($nome) <= 3){
    $_SESSION['erro'] = "Nome deve conter mais de 3 caracteres!";
    header('location: index.php');
    return;
}elseif(empty($idade)){
    $_SESSION['erro'] = "Idade precisa conter valor!";
    header('location: index.php');
    return;
}elseif(!is_numeric($idade)){
    $_SESSION['erro'] = "Idade tem que ser números!";
    header('location: index.php');
    return;
}else if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categoria); $i++){
        if($categoria[$i] == 'infantil'){
            $_SESSION['sucesso'] = "O nadador ".$nome." compete na categoria ".$categoria[$i];
            header('location: index.php');
            return;
        }
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categoria); $i++){
        if($categoria[$i] == 'adolescente'){
            $_SESSION['sucesso'] = "O nadador ".$nome." compete na categoria ".$categoria[$i];
            header('location: index.php');
            return;
        }
    }
}else if($idade > 18 && $idade <= 60){
    for($i = 0; $i <= count($categoria); $i++){
        if($categoria[$i] == 'adulto'){
            $_SESSION['sucesso'] = "O nadador ".$nome." compete na categoria ".$categoria[$i];
            header('location: index.php');
            return;
        }
    }
}else{
    $_SESSION['sucesso'] = "O nadador ".$nome." se encontra fora da faixa etária das categorias disponíveis!";
    header('location: index.php');
    return;
}