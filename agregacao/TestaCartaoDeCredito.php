<?php

require_once("Cliente.php");
require_once("CartaoDeCredito.php");

$cliente = new Cliente;
$cliente->nome = "Wagner";
$cliente->codigo = 13;

$cartao = new CartaoDeCredito;
$cartao->numero = 4444;
$cartao->dataDeValidade = "12/11/2020";

$cartao->dono = $cliente;

echo "Numero do cartao: $cartao->numero" . PHP_EOL;
echo "Validade do cartao: $cartao->dataDeValidade" . PHP_EOL;
echo "Nome do cliente do cartao: {$cartao->dono->nome}" . PHP_EOL;
