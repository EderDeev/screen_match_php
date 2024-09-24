<?php

class ConversorParaEstrelas{

    public function converte(Avaliavel $avaliavel):float{
        $nota = $avaliavel->media();

        return round($nota / 2) ;
    }
}