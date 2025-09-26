<!-- Crie um programa que receba um número (de 1 a 10) e exiba a tabuada completa desse número, do 1 ao 10. -->

<?php
$numero = 3;

for ($i=1; $i <= 10; $i++) {
   $resultadoTabuada = $numero * $i;
   echo "$numero X $i = $resultadoTabuada\n";
}