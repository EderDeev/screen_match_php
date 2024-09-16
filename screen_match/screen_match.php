<?php

require __DIR__ . '/funcoes.php';

echo "Bem_vindo ao ScreenMatch!!
";

$nomeFilme = "Top Gun - Maverick";

$anoDeLancamento = 2023;
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

exibirMensagemLancamento($anoDeLancamento);

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
	"genero" => "superherói"	
];

echo($filmes["nome"]);

$FilmeComString = json_encode($filmes);

file_put_contents(__DIR__ . '/filme.json' , $FilmeComString);

var_dump(json_decode('{"nome":"Thor: Ragnarok", "ano":2021, "nota":7.8, "genero":"super-her\u00f3i"}',true));