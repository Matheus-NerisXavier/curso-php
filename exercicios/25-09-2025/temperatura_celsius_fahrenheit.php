<!-- Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
 -->

<?php
$valorCelsius = $argv[1] ?? 20;
$celsiusParaFahrenheit = ($valorCelsius * 9/5) + 32;

echo "O valor de $valorCelsius Celsius em Fahrenheit é $celsiusParaFahrenheit";
?>