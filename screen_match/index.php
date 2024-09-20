<?php

include __DIR__ . '\src\Modelo\Titulo.php';
include __DIR__ . '\src\Modelo\Genero.php';
include __DIR__ . '\src\Modelo\Filme.php';
include __DIR__ . '\src\Modelo\Serie.php';

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
$serie->avalia(6);
$serie->avalia(8);

echo $serie->media() . "\n";

