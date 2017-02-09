<?php
/*
* Acrescente alguns métodos na classe Conta para realizar as operações de deposito, saque, impressão de extrato e consulta do saldo disponível.
*/
class Conta
{

  public $numero;
  public $saldo;
  public $limite = 100;
  public $agencia;

//metodo construtor
//com isso fica obrigado que seja passado esse argumento na criação do objeto(no new)
  public function __construct($numero)
  {
    $this->numero = $numero;
  }

  public function deposita($valor)
  {
    $this->saldo += $valor;
  }

  public function saca($valor)
  {
    if ($valor <= $this->saldo) {
      $this->saldo -= $valor;
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function consulta()
  {
    return $this->saldo;
  }

}
