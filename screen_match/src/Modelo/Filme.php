<?php


class Filme{
   
    private string $nome;
    private float $anoLancamento;
    private array $notas = [];
    private string $genero;

    public function avalia(float $nota): void{
        $this->notas[] = $nota;
    }

    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}

