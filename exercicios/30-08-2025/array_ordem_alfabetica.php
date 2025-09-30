<!-- Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética. -->

<?php

function textoEmOrdemAlfabetica(array $textos) : array {
   
      sort($textos);
      return $textos;
}

$listaDePalavras = ['Matheus', 'Ana', 'Batata', 'Limão', 'Escada', 'Volei'];

print_r(textoEmOrdemAlfabetica($listaDePalavras));