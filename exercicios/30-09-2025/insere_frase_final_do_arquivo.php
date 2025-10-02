<!-- Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche -->

<?php
$frase = "A memória é uma artista peculiar: retoca as cores do passado, quase sempre deixando-as mais vibrantes do que realmente foram.";
$caminhoArquivo = __DIR__ . '/teste.txt';
$insereFraseUltimaLinha = file_put_contents($caminhoArquivo, "\n" . $frase, FILE_APPEND);
?>
