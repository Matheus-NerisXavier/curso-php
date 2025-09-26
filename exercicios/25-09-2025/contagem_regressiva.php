<!-- Escreva um programa que inicie com um número (ex: 10) e faça uma contagem regressiva até 0. A cada segundo (opcional, um desafio extra!), exiba o número na tela, e no final, exiba a mensagem "FOGO!". -->
<?php

$numero = 10;
 
while ($numero >= 0) {
  echo "$numero\n";
  sleep(1);
  $numero --;
}
  echo "Fogo";
?>