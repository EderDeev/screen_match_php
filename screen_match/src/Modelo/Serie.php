<?php

class Serie extends Titulo
{

    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoPorEpisodio,
        public readonly int $numeroTemporadas,
        public readonly int $episodioPorTemporada
    )
    {
        parent::__construct($nome,$anoLancamento,$genero);
    }
}