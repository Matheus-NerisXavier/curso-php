<?php

namespace ScreenMath\Calculos;

use DivisionByZeroError;
use ScreenMath\Modelo\Avaliavel;

class ConversorNotaEstrela
{
  public function converte(Avaliavel $avaliavel): float
  {
    try {
       $nota = $avaliavel->media();

       return round($nota) / 2;
    } catch(DivisionByZeroError){
       return 0;
    }
  }
}