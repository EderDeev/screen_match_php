<?php

namespace screen_match\Modelo;

class Filme extends Titulo{
    
public function __construct(
    string $nome,
    int $anoLancamento,
    Genero $genero,
    public readonly float $duracaoEmMinutos
    ){
        parent::__construct($nome,$anoLancamento,$genero);
    }

    public function duracaoEmMinutos():int{
        return $this->duracaoEmMinutos;
    }
    
}

