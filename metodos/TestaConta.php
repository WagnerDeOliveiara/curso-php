<?php

//Teste os métodos da classe Conta

require_once("Conta.php");

//passa parametro pois a clase conta tem metodo construtor para numero de conta, com isso fica obrigado que seja passado argumento na criação do objeto(no new)
$conta = new Conta(123);
$conta->numero = 13;

//Deposito de 700
$conta->deposita(1000);
echo "Saldo incluido: $conta->saldo" . PHP_EOL;

//Saca 800
$resultado = $conta->saca(800);
if ($resultado) {
  echo "Saldo apos saque: $conta->saldo" . PHP_EOL;
} else {
  echo "Saldo insuficiente para saque" . PHP_EOL;
}

$valorConsulta = $conta->consulta();
  echo "Valor do saldo consultado: $valorConsulta" . PHP_EOL;
