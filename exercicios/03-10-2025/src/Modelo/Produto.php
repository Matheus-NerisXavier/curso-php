<?php

class Produto {
  public function __construct(
    protected readonly string $nome,
    protected readonly int $precoEmCentavos
  )
  {
  }

  public function exibeDetalhes(): string 
  {
    return "Produto: $this->nome \nValor: $this->precoEmCentavos \n";
  }

  public function getPrecoFormatado(): string
  {
    $precoFormatado = number_format($this->precoEmCentavos,2,',','.');
    return "$precoFormatado \n";
  }
}