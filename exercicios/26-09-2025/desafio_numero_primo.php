<?php 
// Crie um programa que, a partir de uma variável, determine se o número contido nela é primo ou não.

$numero = 2;
$ehPrimo = true;

if ($numero <= 1) {
  $ehPrimo = false;
} else {
  for($i = 2; $i < $numero; $i++) {
    if($numero % $i == 0) {
      $ehPrimo = false;
      break;
    }
  }
}

if($ehPrimo) {
   echo "O número $numero É primo.";
} else {
    echo "O número $numero NÃO é primo.";
}

?>