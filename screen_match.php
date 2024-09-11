<?php

echo "Bem_vindo ao ScreenMatch!!
";

$nomeFilme = "Top Gun - Maverick";

$anoDeLancamento = $argv[1] ?? 2022;
$somaNotas = 0;
$quantidadeNotas = $argc - 1; 

$incluidoNoPlano = true;

for ($i = 1 ; $i < $argc;$i++ ){
    $somaNotas += $argv[$i];
}
$notaFilme = $somaNotas / $quantidadeNotas;


echo "Nome do Filme: $nomeFilme\n" ;
echo "Nota filme: " . $notaFilme . "\n"; 
echo "Ano de lançamento do filme: $anoDeLancamento\n" ;

if($anoDeLancamento > 2022){   
    echo "Esse filme é um lançamento\n";
}elseif($anoDeLancamento > 2020 && $anoDeLancamento <= 2022){
    echo "Esse filme é novo\n";
}else{
    echo "Esse não é um filme novo\n";
}

$genero = match($nomeFilme){
    "Top Gun - Maverick" => "ação",
    "Thor" => "super-heroi",
    "Se beber não case" => "comédia",
    default => "Gênero desconhecido",
};

echo "Gênero do filme é: $genero";