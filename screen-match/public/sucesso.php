<?php
$conteudoArquivoJson = file_get_contents('filme.json');
$filme = json_decode($conteudoArquivoJson, true)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filme inserido com sucesso!</title>
</head>
<body>
    <h1>Nome do filme: <?=$filme['nome']?></h1>
    <p>Ano do filme: <?=$filme['ano']?></p>
    <p>Nota do filme: <?=$filme['nota']?></p>
    <p>Genero do filme: <?=$filme['genero']?></p>  
</body>
</html>