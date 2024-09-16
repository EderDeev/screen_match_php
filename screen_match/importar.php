<?php

$caminhoArquivoJson = __DIR__ . '/filme.json';
$filme = file_get_contents($caminhoArquivoJson);

var_dump(json_decode($filme,true));