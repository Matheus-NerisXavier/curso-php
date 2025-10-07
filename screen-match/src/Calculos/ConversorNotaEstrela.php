<?php

class ConversorNotaEstrela
{
  public function converte(Titulo $titulo): float
  {
    $nota = $titulo->media();

    //Realiza conversão

    return $nota;
  }
}