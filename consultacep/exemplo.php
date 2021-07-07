<?php

require_once "vendor/autoload.php";

use \antoliverjr\consultacep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromCep('42808193');

print_r($resultado);