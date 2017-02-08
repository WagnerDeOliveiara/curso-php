<?php

require_once("Agencia.php");
require_once("Conta.php");

$agencia = new Agencia;
$agencia->numero = 178;

$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 1000.0;
$conta->limite = 500;

$conta->agencia = $agencia;

echo "Numero da conta: $conta->numero" . PHP_EOL;
echo "Saldo da conta: $conta->saldo" . PHP_EOL;
echo "limite  da conta: $conta->limite" . PHP_EOL;
echo "Agencia da conta: {$conta->agencia->numero}" . PHP_EOL;
