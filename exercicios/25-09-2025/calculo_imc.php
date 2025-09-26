<!-- Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
 -->

<?php
$altura = 1.70;
$peso = 80;

$imc = $peso / ($altura * $altura);
echo $imc;

if ($imc < 18.5) {
  echo "Baixo peso\n";
} else if ($imc <= 24.9 ) {
  echo "Peso adequado\n";
} else if ($imc <= 29.9) {
  echo "Sobrepeso\n";
} else {
  echo "Obesidade\n";
}
?>
