<!-- Este é um exercício de programação famoso! Escreva um programa que imprima os números de 1 a 100, mas com as seguintes regras:

Para números que são múltiplos de 3, imprima "Fizz" em vez do número.

Para números que são múltiplos de 5, imprima "Buzz" em vez do número.

Para números que são múltiplos de 3 e de 5, imprima "FizzBuzz".

Exemplo do início da saída: -->

<?php
  for ($i=1; $i <= 100; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
      echo "FizzBuzz\n";
    } else if ($i % 3 == 0) {
        echo "Fizz\n";
    } else if ($i % 5 == 0) {
      echo "Buzz\n";
    } else {
      echo $i . "\n";
    }
    
  }
?>