<?php

echo "Bem_vindo ao ScreenMatch!!
";

$nomeFilme = "Top Gun - Maverick";
$anoDeLancamento = $argv[1] ?? 2022;
$nota = 8.8;
$incluidoNoPlano = true;
$nota2 = 9.0;

echo "Nome do Filme: $nomeFilme\n" ;
echo "Nota filme: " . $nota . "\n"; 
echo "Ano de lançamento do filme: $anoDeLancamento\n" ;

if($anoDeLancamento > 2022){   
    echo "Esse filme é um lançamento";
}elseif($anoDeLancamento > 2020 && $anoDeLancamento <= 2022){
    echo "Esse filme é novo";
}else{
    echo "Esse não é um filme novo";
}