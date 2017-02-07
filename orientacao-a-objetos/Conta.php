<?php
/**
 * As contas do banco possuem número, saldo e limite. Crie uma classe chamada Conta para definir os objetos que representarão as contas do banco.
 */
class Conta
{

  public $numero;
  public $saldo;
  public $limite;

}

/**
 *  Faça um teste que exiba no Console os valores armazenados nos atributos de um objeto da classe Conta logo após a sua criação.
 */
$conta = new Conta;

$conta1 = new Conta;


echo "Numero da conta: $conta" . PHP_EOL;

echo "Numero  da conta: $conta1" . PHP_EOL;
