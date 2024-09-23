<?php

class CalculadoraDeMaratona{
    private int $duracaoMaratona = 0;

    public function getDuracaoMaratona():int{
        return $this->duracaoMaratona;
    }

    public function inclui(Titulo $titulo){
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    
}