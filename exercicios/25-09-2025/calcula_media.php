<!--Crie um programa em PHP que calcule a média de três notas e exiba o resultado. -->

<?php 
$nota1 = $argv[1] ?? 2;
$nota2 = $argv[2] ?? 7;
$nota3 = $argv[3] ?? 4;

$result = ($nota1 + $nota2 + $nota3) / 3;

echo "O resultado da média é: $result";
?>

