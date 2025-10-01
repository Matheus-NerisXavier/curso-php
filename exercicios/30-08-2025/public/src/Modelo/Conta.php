 <!-- Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não -->
<?php

enum TipoConta {
  case corrente;
  case investimento;
  case poupanca;
  case universitaria;

  public function possuiTaxa(): bool
  {
    return match($this) {
      TipoConta::corrente, TipoConta::investimento => true,
      TipoConta::poupanca, TipoConta::universitaria => false
    };
  }
}