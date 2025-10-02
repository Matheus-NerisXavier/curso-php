<!-- Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha -->

<?php

$caminhoArquivo = __DIR__ . '/teste.txt';
$handle = fopen($caminhoArquivo, "r");
$primeiraLinha = fgets($handle);
fclose($handle);

echo "A primeira linha do arquivo é: \n";
echo $primeiraLinha;