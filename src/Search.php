<?php

namespace Vpolo\DioAvancadoPhp;

class Search{
    private $url = "https://viacep.com.br/ws/";

    public function getAdressFromZipcode(string $zipCode): array{
        $zipCode = preg_replace('/[^0-9]/im',"",$zipCode); //tudo que não for 0-9 será substituido por ""

        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);
        
    }

}