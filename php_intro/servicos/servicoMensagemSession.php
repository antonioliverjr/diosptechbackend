<?php

session_start();

function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['erro'] = $mensagem;
}

function obterMensagemErro() : ?string
{
    if(isset($_SESSION['erro']))
        return $_SESSION['erro'];
    
    return null;
}

function setarMensagemSucesso(string $mensagem) : void
{
    $_SESSION['sucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string
{
    if(isset($_SESSION['sucesso']))
        return $_SESSION['sucesso'];

    return null;
}

function RemoveMensagemSucesso() : void
{
    if(isset($_SESSION['sucesso']))
        unset($_SESSION['sucesso']);
    
}

function RemoveMensagemErro() : void
{
    if(isset($_SESSION['erro']))
        unset($_SESSION['erro']);
}