<?php
/**
 * As agências do banco possuem número. Crie uma classe chamada Agencia para definir os objetos que representarão as agências do banco.
 */
class Agencia
{

  public $numero;

}

/**
 * Faça um teste criando dois objetos da classe Agencia. Altere e exiba no Console os valores armazenados nos atributos desses objetos.
 */
$agencia = new Agencia;
$agencia->numero = 1234;

$agencia1 = new Agencia;
$agencia1->numero = 5678;

echo "Numero da agencia: $agencia->numero" . PHP_EOL;

echo "Numero da agencia: $agencia1->numero" . PHP_EOL;
