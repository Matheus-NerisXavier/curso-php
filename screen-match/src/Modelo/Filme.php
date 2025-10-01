<?php

class Filme {
    private array $notas;

    public function __construct(
      public readonly string $nome,
      public readonly int $anoLancamento,
      public readonly string $genero,
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
