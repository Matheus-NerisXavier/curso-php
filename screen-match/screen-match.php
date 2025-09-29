<?php

function exibeMensagemLancamento(int $ano): void {
  if ($ano > 2022) {
    echo "Esse filme é um lançamento";
  } elseif ($ano > 2020 && $ano <= 2022) {
    echo "Esse filme ainda é novo\n";
  }
  else {
    echo "Esse filme não é um lançamento\n";
  }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

echo "Bem-vindo(a) ao screen match! \n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;

$notas = [];

for ($i = 1; $i < $argc; $i++) {
  $notas[] += (float) $argv[$i];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme \n";
echo "Ano de lançamento: $anoLancamento \n"; 

exibeMensagemLancamento(2022);

$genero = match ($nomeFilme) {
  "Top Gun - Maverick" => "ação",
  "Thor: Ragnarok" => "super-herói",
  "Se beber não case" => "comédia",
  default => "gênero desconhecido"
};

echo "O gênero do filme é: $genero\n";

$filme = [
  "nome" => "Thor: Ragnarok",
  "ano" => 2021,
  "nota" => 7.8,
  "genero" => "super-heroi",
];

echo $filme["nome"];