<?php

class Carro 
{
  private static int $numeroDeCarros = 0;
  
  public function __construct(
    public readonly string $marca,
    public readonly string $modelo,
    public readonly int $ano,
  ){
    self::$numeroDeCarros++;
   }

  public function exibirDetalhes(): string
  {
    return "Carro: $this->modelo, $this->ano";
  }

  public static function verNumeroDeCarros(): int 
  {
    return self::$numeroDeCarros;
  }
}
