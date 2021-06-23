<?php


function defineCategoriaCompetidor(string $nome, string $idade) : ?string{

    $categoria = [];
    $categoria[] = 'infantil';
    $categoria[] = 'adolescente';
    $categoria[] = 'adulto';

    if(validaNome($nome) && validaIdade($idade)){
        RemoveMensagemErro();
        if($idade >= 6 && $idade <= 12){
            for($i = 0; $i <= count($categoria); $i++){
                if($categoria[$i] == 'infantil'){
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categoria[$i]."!");
                    /*$_SESSION['sucesso'] = "O nadador ".$nome." compete na categoria ".$categoria[$i];
                    header('location: index.php');*/
                    return null;
                }
            }
        }else if($idade >= 13 && $idade <= 18){
            for($i = 0; $i <= count($categoria); $i++){
                if($categoria[$i] == 'adolescente'){
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categoria[$i]);
                    /*$_SESSION['sucesso'] = "O nadador ".$nome." compete na categoria ".$categoria[$i];
                    header('location: index.php');*/
                    return null;
                }
            }
        }else if($idade > 18 && $idade <= 60){
            for($i = 0; $i <= count($categoria); $i++){
                if($categoria[$i] == 'adulto'){
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categoria[$i]);
                    /*$_SESSION['sucesso'] = "O nadador ".$nome." compete na categoria ".$categoria[$i];
                    header('location: index.php');*/
                    return null;
                }
            }
        }else if($idade < 6 || $idade > 60){
            setarMensagemSucesso("O nadador ".$nome." se encontra fora da faixa etária das categorias disponíveis!");
            /*$_SESSION['sucesso'] = "O nadador ".$nome." se encontra fora da faixa etária das categorias disponíveis!";
            header('location: index.php');*/
            return null;
        }
    } else{
        removeMensagemSucesso();
        return obterMensagemErro();
    }
}

