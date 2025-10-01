<?php

class Serie {
    private array $notas;

    public function __construct(
      public readonly string $nome,
      public readonly int $anoLancamento,
      public readonly Genero $genero,
      public readonly int $temporadas,
      public readonly int $episodiosPorTemporadas,
      public readonly int $minutosPorEpisodio,
    )
    {
      $this->notas = [];
    }

    function avalia(float $nota): void
    {
      $this->notas[] = $nota;
    }

    function media(): float
    {
      $somaNotas = array_sum($this->notas);
      $quantidadeNotas = count($this->notas);

      return $somaNotas / $quantidadeNotas;
    }
}