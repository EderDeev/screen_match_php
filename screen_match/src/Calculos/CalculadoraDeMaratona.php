<?php

namespace screen_match\Calculos;

use screen_match\Modelo\Titulo;

class CalculadoraDeMaratona{
    private int $duracaoMaratona = 0;

    public function getDuracaoMaratona():int{
        return $this->duracaoMaratona;
    }

    public function inclui(Titulo $titulo){
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    
}