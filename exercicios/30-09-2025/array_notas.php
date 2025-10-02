<?php
// Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.


$notas = [10, 5, 7, 2, 1, 6, 4, 8, 1, 5];

arsort($notas);

$tresMaioresNotas = array_slice($notas,0,3);

print_r($tresMaioresNotas);