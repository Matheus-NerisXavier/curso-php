<!-- Elabore um programa em PHP que receba um valor em metros e converta para centímetros. -->

<?php
echo "Digite um valor em metros para conversão em 'cm' \n";
$valorEmMetros = $argv[1] ?? 5;

$valorEmCm = $valorEmMetros * 100;

echo "O valor em centímetros é: $valorEmCm";
?>