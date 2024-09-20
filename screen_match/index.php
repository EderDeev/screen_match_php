<?php

include __DIR__ . '\src\Modelo\Genero.php';
include __DIR__ . '\src\Modelo\Filme.php';

echo "Bem vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    "Thor",
    2022,
    Genero::Acao,
);


$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);


var_dump($filme);

echo $filme->media() . "\n";

