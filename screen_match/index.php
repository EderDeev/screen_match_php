<?php

require 'autoload.php';

use screen_match\Modelo\{
    Filme,Serie,Genero,Episodio
};

use screen_match\Calculos\{
    CalculadoraDeMaratona,ConversorParaEstrelas
};

echo "Bem vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    "Thor",
    2022,
    Genero::Acao,
    180

);


$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);


var_dump($filme);

echo $filme->media() . "\n";

$serie = new Serie("Lost",2007,Genero::Drama,30,5,10);

echo $serie->nome . "\n";

$serie->avalia(10);
$serie->avalia(10);
$serie->avalia(8);

echo $serie->media() . "\n";


$episodio = new Episodio($serie,"Primeiro episódio",1);

$calculadoraDeMaratona = new CalculadoraDeMaratona();
$calculadoraDeMaratona->inclui($filme);
$calculadoraDeMaratona->inclui($serie);
$maratonaEmMinutos = $calculadoraDeMaratona->getDuracaoMaratona();

echo "Vôce precisa de $maratonaEmMinutos minutos para mataronar essas obras \n";

$conversor = new ConversorParaEstrelas();

$estralasSerie =  $conversor->converte($serie);
$estrelasFilme = $conversor->converte($filme);
echo $estralasSerie . "\n";
echo $estrelasFilme;

