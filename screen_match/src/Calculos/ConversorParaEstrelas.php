<?php

namespace screen_match\Calculos;

use DivisionByZeroError;
use Throwable;
use screen_match\Modelo\Avaliavel;

class ConversorParaEstrelas{

    public function converte(Avaliavel $avaliavel):float{
        
        try {
            $nota = $avaliavel->media();

            return round($nota) / 2;
            }catch(DivisionByZeroError){
                return 0;
            }
}
}