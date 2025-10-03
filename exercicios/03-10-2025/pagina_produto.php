<?php
require __DIR__ . '/src/Modelo/Produto.php';

$produto = new Produto(
  'Chuveiro',
  16000
);

$produtoFormatado = $produto->getPrecoFormatado();

echo $produto->exibeDetalhes();
echo $produtoFormatado;