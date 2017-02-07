<?php
/**
 * Em uma escola, os alunos precisam ser divididos por turmas, que devem ser representadas dentro da aplicação.
 * Crie uma classe chamada Turma que contenha quatro atributos: o primeiro para o período, o segundo para definir a série, o terceiro para sigla e o quarto para o tipo de ensino.
 */
class Turma
{

  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;

}

/**
 *Crie dois objetos da classe Turma. Altere os valores dos atributos desses objetos e exiba no Console os valores armazenados nesses atributos.
 */
$turma = new Turma;
$turma->periodo = "Tarde";
$turma->serie = 8;
$turma->sigla = "A";
$turma->tipoDeEnsino = "Fundamental";

$turma1 = new Turma;
$turma1->periodo = "Manha";
$turma1->serie = 5;
$turma1->sigla = "B";
$turma1->tipoDeEnsino = "Fundamental";

echo  PHP_EOL ."Periodo da turma: $turma->periodo" . PHP_EOL;
echo "Serie da turma: $turma->serie" . PHP_EOL;
echo "Sigla da turma: $turma->sigla" . PHP_EOL;
echo "Tipo De Ensino da turma: $turma->tipoDeEnsino" . PHP_EOL . PHP_EOL;

echo "Periodo da turma: $turma1->periodo" . PHP_EOL;
echo "Serie da turma: $turma1->serie" . PHP_EOL;
echo "Sigla da turma: $turma1->sigla" . PHP_EOL;
echo "Tipo De Ensino da turma: $turma1->tipoDeEnsino" . PHP_EOL .  PHP_EOL;
