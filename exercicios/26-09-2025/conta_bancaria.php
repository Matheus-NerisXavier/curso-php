<!-- Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela. -->

<?php 
$contaBancaria = [
  "titular" => "Matheus Neris",
  "saldo" => 1000.00
];

echo "Titular da conta: " . $contaBancaria['titular'] . "\n";
echo "Saldo da conta: " . $contaBancaria['saldo'] . "\n";

?>