<?php

function exibirMensagemLancamento(int $ano) : void {
    if($ano > 2022){   
        echo "Esse filme é um lançamento\n";
    }elseif($ano > 2020 && $ano <= 2022){
        echo "Esse filme é novo\n";
    }else{
        echo "Esse não é um filme novo\n";
    }
    
}

function incluidoNoPlano(bool $planoPrime, int $anoDeLancamento) : bool {
    return $planoPrime || $anoDeLancamento > 2020;
}

echo "Bem_vindo ao ScreenMatch!!
";

$nomeFilme = "Top Gun - Maverick";

$anoDeLancamento = 2005;
$planoPrime = true;
$incluidoNoPlano = incluidoNoPlano($planoPrime,$anoDeLancamento);
echo($incluidoNoPlano."\n");

$notas = [];
$quantidadeNotas = $argc - 1; 
for ($i = 1 ; $i < $argc;$i++ ){
    $notas[] = (float) $argv[$i];
}
$somaNotas = 0;
foreach($notas as $nota){
    $somaNotas += $nota;
}

$notaFilme = $somaNotas / $quantidadeNotas;


echo "Nome do Filme: $nomeFilme\n" ;
echo "Nota filme: " . $notaFilme . "\n"; 
echo "Ano de lançamento do filme: $anoDeLancamento\n" ;

exibirMensagemLancamento(1990);

$genero = match($nomeFilme){
    "Top Gun - Maverick" => "ação",
    "Thor" => "super-heroi",
    "Se beber não case" => "comédia",
    default => "Gênero desconhecido",
};

echo "Gênero do filme é: $genero\n";
$filmes = [
	"nome" => "Thor",
	"ano" => 2021,
	"nota" => 9.1,
	"genero" => "superheroi"	
];

echo($filmes["nome"]);