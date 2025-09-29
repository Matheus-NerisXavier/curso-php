<!-- Crie uma função em PHP que converta graus celsius para Fahrenheit. -->

<?php 

function converterCelciusParaFahrenheit(float $celcius): string {
  $calculo = ($celcius * (9/5)) + 32;
  
  return "O resultado da converção de $celcius para Fahrenheit é : $calculo";
}

$temperaturaCelcius = converterCelciusParaFahrenheit(23);
echo $temperaturaCelcius;

?>