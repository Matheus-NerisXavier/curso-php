<?php

use ScreenMath\Calculos\ConversorNotaEstrela;
use ScreenMath\Modelo\Episodio;
use ScreenMath\Modelo\Genero;
use ScreenMath\Modelo\Serie;

require 'autoload.php';

$serie = new Serie('Nome da serie', 2024, Genero::Acao, 7, 20,30);
$episodio = new Episodio($serie, 'Piloto', 1);

try{
  $episodio->avalia(45);
  $episodio->avalia(-35);

  $conversor = new ConversorNotaEstrela();
  echo $conversor->converte($episodio);
} catch(Exception $e){
  echo "Um problema aconteceu: " . $e->getMessage();
}
