<?php
/**
 * Em uma escola, além dos alunos temos os funcionários, que também precisam ser representados em
 * nossa aplicação. Então crie uma classe chamada Funcionario que contenha dois atributos: o primeiro para o nome e o segundo para o salário dos funcionários.
 */
class Funcionario
{

  public $nome;
  public $salario;

}

/**
 * Crie dois objetos da classe Funcionario. Altere os valores dos atributos desses objetos e exiba no Console os valores armazenados nesses atributos.
 */

$funcionario = new Funcionario;
$funcionario->nome = "Marcelo Martins";
$funcionario->salario = 1800.57;

$funcionario1 = new Funcionario;
$funcionario1->nome = "Rafael Cosentino";
$funcionario1->salario = 2000.88;


echo "Nome do Funcionario: $funcionario->nome" . PHP_EOL;
echo "Salario do Funcionario: $funcionario->salario" . PHP_EOL;

echo "Nome do Funcionario: $funcionario1->nome" . PHP_EOL;
echo "Salario do Funcionario: $funcionario1->salario" . PHP_EOL;
