<?php

namespace screen_match\Modelo;

interface Avaliavel{

    public function avalia(float $nota):void;
    public function media():float;

}