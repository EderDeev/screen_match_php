<?php

namespace screen_match\Modelo;
use InvalidArgumentException;

trait ComAvaliavel
{
    private array $notas = [];
    
    public function avalia(float $nota): void{
        if($nota < 0 || $nota > 10){
            throw new InvalidArgumentException("A nota precisa ser entre 0 e 10");
        }
        $this->notas[] = $nota;
    }

    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}