<!-- Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.

Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado. -->

<?php
$notas = [6, 10 ,5, 7, 1];

foreach ($notas as $nota) {
  $AlunoAprovadoReprodado = $nota > 6 ? 'Aluno Aprovado' : 'Aluno Reprovado';
  echo "$AlunoAprovadoReprodado\n";
}
?>