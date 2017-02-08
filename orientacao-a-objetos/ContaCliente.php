<?php
/**
 * As contas do banco possuem número, saldo e limite. Crie uma classe chamada Conta para definir os objetos que representarão as contas do banco.
 */
class Conta
{

  public $numero;
  public $saldo;
  public $dono;

}

class Cliente
{

  public $nome;

}

$cliente = new Cliente;
$cliente->nome = "teste";

$conta = new Conta;
$conta->numero = 111;
$conta->saldo = 10.10;

$conta->dono = $cliente;

echo "O nome do cliente da conta é: {$conta->dono->nome}" . PHP_EOL;
