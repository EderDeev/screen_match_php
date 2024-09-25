<?php

namespace screen_match\Modelo;

class Episodio implements Avaliavel{
    
    use ComAvaliavel;
    
    public function __construct(
        public readonly Serie $serie,
        public readonly string $nome,
        public readonly int $numero
    )
    {
        $this->notas = [];
    }

    
}