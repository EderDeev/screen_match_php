<?php

namespace screen_match\Calculos;

use screen_match\Modelo\Avaliavel;

class ConversorParaEstrelas{

    public function converte(Avaliavel $avaliavel):float{
        $nota = $avaliavel->media();

        return round($nota / 2) ;
    }
}