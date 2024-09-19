<?php

include __DIR__ . '\src\Modelo\Filme.php';

echo "Bem vindo(a) ao ScreenMatch\n";

$filme = new Filme();

$filme->nome = "Thor";
$filme->genero = "super-heroi";
$filme->anoLancamento = 2021;


$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);


var_dump($filme);

echo $filme->media();