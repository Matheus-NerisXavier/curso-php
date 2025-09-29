<!-- Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação. -->

<?php
function calculadora (int $numero1, int $numero2, string $operacao) {
    switch ($operacao) {
      case 'soma':
        $resultado = $numero1 + $numero2;
        break;

      case 'subtracao':
        $resultado = $numero1 - $numero2;
        break;  
       
      case 'multiplicacao':
        $resultado = $numero1 * $numero2;
        break;    

      case 'divisao':
        if($numero2 != 0) {
          $resultado = $numero1 / $numero2;
        } else {
          echo "Erro: Divisão por zero não é permitida.";
          return;
        }
        break;     

      default:
        echo "Operação inválida!";
        return;
  }
    echo "O resultado da operação $operacao é: $resultado";

}

calculadora(3, 0, 'divisao');

?>