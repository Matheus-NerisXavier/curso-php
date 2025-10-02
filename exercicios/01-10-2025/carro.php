<!-- Desafio: Crie uma classe Carro com as seguintes propriedades: marca, modelo e ano.

O construtor deve inicializar essas três propriedades.

Crie um método público exibirDetalhes() que retorna uma string formatada com os dados do carro (ex: "Carro: Ford Ka, 2020").

Conceito novo: Adicione uma propriedade estática e privada chamada $numeroDeCarros que será incrementada toda vez que um novo carro for criado (ou seja, dentro do construtor).

Crie um método estático e público chamado verNumeroDeCarros() que retorna o valor dessa propriedade estática. -->

<?php

require __DIR__ . '/src/Modelo/Carro.php';

$carro1 = new Carro('Ford', 'Ka', 2020);
$carro2 = new Carro('Fiat', 'Uno', 2010);
$carro3 = new Carro('Honda', 'Civic', 2022);

echo $carro1->modelo . "\n";
echo $carro1->ano . "\n";

$datelheCarro = $carro1->exibirDetalhes();
echo $datelheCarro . "\n";
echo "Número de carros criados: " . Carro::verNumeroDeCarros() . "\n";