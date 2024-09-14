<?php

function exibirMensagemLancamento(int $ano) : void {
    if($ano > 2022){   
        echo "Esse filme é um lançamento\n";
    }elseif($ano > 2020 && $ano <= 2022){
        echo "Esse filme é novo\n";
    }else{
        echo "Esse não é um filme novo\n";
    }
    
}

function incluidoNoPlano(bool $planoPrime, int $anoDeLancamento) : bool {
    return $planoPrime || $anoDeLancamento > 2020;
}
