<?php

require_once 'Conta.php';

//por se tratar de atributo da classe, utiliza "NomeClasse::"
echo "Contador: " . Conta::$contador . PHP_EOL;

$conta = new Conta;
$conta->numero = 11;
$conta->saldo= 600;

echo "Contador: " . Conta::$contador . PHP_EOL;

$conta1 = new Conta;
$conta1->numero = 12;
$conta1->saldo= 130;

echo "Contador: " . Conta::$contador . PHP_EOL;

//Para se chamar ,etodos da classe(metodos static) se utiliza "NomeClasse::metodo"
Conta::zeraContador();
echo "Contador: " . Conta::$contador . PHP_EOL;
