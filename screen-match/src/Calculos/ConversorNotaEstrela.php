<?php

namespace ScreenMath\Calculos;
use ScreenMath\Modelo\Avaliavel;

class ConversorNotaEstrela
{
  public function converte(Avaliavel $avaliavel): float
  {
    $nota = $avaliavel->media();

    return round($nota) / 2;
  }
}