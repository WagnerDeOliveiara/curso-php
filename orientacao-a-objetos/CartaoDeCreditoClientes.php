<?php
/**
 * Defina um vínculo entre os objetos que representam os clientes e os objetos que representam os cartões de crédito. Para isso, você deve alterar a classe CartaoDeCredito.
 */

//spl_autoload_register();
require_once("Cliente.php");
require_once("CartaoDeCredito.php");

$cliente = new Cliente;
$cliente->nome = "Rafael Cosentino";
$cliente->codigo = 123;

$cartaoDeCredito = new CartaoDeCredito;
$cartaoDeCredito->numero = 111111;
$cartaoDeCredito->dataDeValidade = "12/12/18";
$cartaoDeCredito->cliente = $cliente;

echo "Numero do Cartão: $cartaoDeCredito->numero" . PHP_EOL;
echo "Data de Validade do Cartão: $cartaoDeCredito->dataDeValidade" . PHP_EOL;
echo "Nome do cliente do cartão: {$cartaoDeCredito->cliente->nome}" . PHP_EOL;
echo "Codigo do cliente do cartão: {$cartaoDeCredito->cliente->codigo}" . PHP_EOL;
