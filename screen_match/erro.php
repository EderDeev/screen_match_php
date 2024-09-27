<?php

use screen_match\Calculos\ConversorParaEstrelas;
use screen_match\Modelo\Episodio;
use screen_match\Modelo\Genero;
use screen_match\Modelo\Serie;

require 'autoload.php';

$serie = new Serie('Nome da serie', 2024, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);
try{
    $episodio->avalia(15);
    $conversor = new ConversorParaEstrelas();
    echo $conversor->converte($episodio);
}catch(Exception $e){
    echo "Aconteceu um erro: " .  $e->getMessage();
}