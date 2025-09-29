<!-- Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro -->

<?php 
function calcularImc (float $peso, float $altura): string {
  $calculoImc = $peso / ($altura * $altura);
  $imcFormatado = number_format($calculoImc, 2, ',', '.');

  if ($calculoImc < 18.5) {
    $classificacao = "Magreza";
  } else if ($calculoImc < 24.9) {
    $classificacao = "Normal";
  } else if ($calculoImc < 29.9) {
    $classificacao = "Sobrepeso";
  } else {
    $classificacao = "Obesidade";
  }

  return "Seu IMC é $imcFormatado e sua classificação foi: $classificacao";
  
}

$diagnostico = calcularImc(80, 1.70);
echo $diagnostico;

?>