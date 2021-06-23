<?php

include "servicos/servicoMensagemSession.php";
include "servicos/servicoCategoriaCompetidor.php";
include "servicos/servicoValidacao.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');

