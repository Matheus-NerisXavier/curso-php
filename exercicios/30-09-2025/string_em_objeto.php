<!-- Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto. -->

<?php
$dados = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$dadosEmObjeto = json_decode($dados);
print_r($dadosEmObjeto);