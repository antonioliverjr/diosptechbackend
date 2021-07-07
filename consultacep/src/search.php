<?php

namespace antoliverjr\consultacep;

class Search{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromCep(string $cep): array{
        $cep = preg_replace('/[^0-9]/', '', $cep);

        $get = file_get_contents($this->url.$cep."/json");

        return (array) json_decode($get);
    }
}